/* Created on 2 July '24 */

import { Body } from "./Body.js";
import gameState from "../GameState.js";
import { postHighScore } from "../../high_score_post.js";

export class Obstacle extends Body {
    constructor(scene, width, height, img, gameScene, pointInterval, endScene) {
        super(scene, width, height, img);
        this.gameScene = gameScene;
        this.pointInterval = pointInterval;
        this.presRate = 350;
        this.endScene = endScene;
        this.fallingObs(gameState.chara);
    }

    fallingObs(chara) {
        this.scene.time.addEvent({
            delay: this.increObRate(),
            callback: () => {this.createOb(chara)},
            callbackScope: this,
            loop: true
        })
        console.log('Is this running,,');
    }

    createOb(chara) {
        const xCoord = Math.floor(Math.random() * gameState.width);
        let ob = this.scene.physics.add.sprite(xCoord, this.height, this.img);
        ob.flipY = true;
        ob.depth = 5;
        this.scene.physics.add.collider(chara, ob, () => this.gameEnd());
    }

    increObRate() {
        let finalRate = 50;
        let lowerBound = 4000;
        let upperBound = 7000;

        let interval = window.setInterval(() => { 
            if (this.presRate > finalRate) this.presRate -= 100; else clearInterval(interval); 
            }, Math.floor(Math.random() * upperBound) + lowerBound);
        return this.presRate;
    }

    gameEnd() {
        clearInterval(this.pointInterval);
        if (gameState.point > gameState.high_score) gameState.high_score = gameState.point;
        postHighScore(gameState.high_score);
        this.endScene.setPrompt(`Game over!\nYou have ${gameState.point} point(s)\nPress k to restart game`);
        this.gameScene.scene.stop('GameScene');
        this.gameScene.scene.start('EndScene');
    }

    /*latestScore() {
        return this.scene.make.text({
            text: gameState.point, 
            style: {color: '#ffff00'}
        });
    }*/
}