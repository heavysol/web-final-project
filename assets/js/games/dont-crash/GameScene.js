/* Created on 27 Apr '24 */

import gameState from "./GameState.js";
import { Chara } from "./game/Chara.js";
import { Obstacle } from "./game/Obstacle.js";
import {RoadScripe} from "./game/RoadScripe.js";

export class GameScene extends Phaser.Scene {
    constructor(endScene) {
        super({key: 'GameScene'});
        this.endScene = endScene;
    }

    preload() {
        this.load.image('charaIcon', '../assets/images/dont-crash-assets/Audi.png');
        this.load.image('obIcon', '../assets/images/dont-crash-assets/Black_viper.png');
        this.load.image('stripeIcon', '../assets/images/dont-crash-assets/stripe.png');
    }

    create() {
        gameState.point = 0;
        gameState.points = this.addPointCounter();
        let inter = window.setInterval(() => {
            gameState.points.destroy();
            gameState.point += 1;
            gameState.points = this.addPointCounter();
        }, 1000);
        
        gameState.strs = new RoadScripe(this, 'stripeIcon');

        gameState.chara = new Chara(this, 30, gameState.height - 20, 'charaIcon').createBody('sprite');
        gameState.chara.depth = 5;
        gameState.chara.body.setAllowGravity(false);
        gameState.chara.setCollideWorldBounds(true);

        gameState.obs = new Obstacle(this, 30, -5, 'obIcon', this, inter, this.endScene).createBody('group');
        
        gameState.cursors = this.t().input.keyboard.createCursorKeys();
    }

    update() {
        if (gameState.cursors.left.isDown) {
            gameState.chara.setVelocityX(-160);
            //this.addBGM();
        }
        else if (gameState.cursors.right.isDown) {
            gameState.chara.setVelocityX(160);
            //this.addBGM();
        }
        else gameState.chara.setVelocityX(0);

        gameState.strs += 100; // Try to set constant downwards velocity
    }

    t() {
        return this.scene.scene;
    }

    addBGM() {
        gameState.bgm = this.t().sound.add('bgmusic', {loop: true});
        gameState.bgm.play();
    }

    addPointCounter() {
        let p = this.t().add.text((7/8) * gameState.width, 5, gameState.point, { color: '#ffff00', fontSize: '14pt'});
        p.depth = 20;
        return p;
    }
}