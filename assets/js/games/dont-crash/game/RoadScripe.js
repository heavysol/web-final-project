/* Created on 2 July '24 */

import gameState from "../GameState.js";

export class RoadScripe {
    constructor(scene, img) {
        this.scene = scene;
        this.img = img;
        this.fallingScripe();
    }

    fallingScripe() {
        console.log('scene:', this.scene);
        this.scene.time.addEvent({
            delay: 1000,
            callback: () => this.createScripes(),
            callbackScope: this,
            loop: true
        })
    }

    createScripes() {
        let scripes = [this.makeOneScripe((1 / 6) * gameState.width), this.makeOneScripe((3 / 6) * gameState.width), this.makeOneScripe((5 / 6) * gameState.width)];
    }

    makeOneScripe(width) {
        let s = this.scene.physics.add.sprite(width, -5, this.img).setScale(.2).setImmovable(true);
        s.depth = 2;
        return s;
    }
}