/* Created by 30 Sep '24 */

import gameState from "../game/GameState.js";

export class Picture extends Phaser.GameObjects.Image {
    constructor(scene, x, y, width, height, texture) {
        super(scene, x, y, texture);
        this.setDisplaySize(width, height);
        this.setDepth(10);
        scene.add.existing(this);
    }

    putSeed(seed) {
        seed.selectSeed();
    }

    putFakeSeeds(fakes) {
        // mets code plus tard
    }

    putTimer(timer) {
        // mets code plus tard
    }

    putPoints(points) {
        // mets code plus tard
    }
}