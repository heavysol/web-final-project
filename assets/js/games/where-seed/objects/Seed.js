/* Created by 29 Sep '24 */

import gameState from "../game/GameState.js";

export class Seed extends Phaser.GameObjects.Image {
    constructor(scene, x, y, width, height, texture) {
        super(scene, x, y, texture);
        this.setDisplaySize(width, height);
        this.setDepth(100);
        scene.add.existing(this);
        this.setInteractive();
    }

    /*isSeedFound() {
        if (gameState.isTrueSeedFound && gameState.timer.time_left > 0) {

        }
    }*/

    static disableSeedInteractivity(...seeds) {
        seeds.forEach(seed => seed.removeInteractive());
    }

    static enableSeedInteractivity(...seeds) {
        seeds.forEach(seed => seed.setInteractive());
    }

    /*selectSeed() {
        this.on('pointerdown', () => { this.after_seed_select(); });
    }*/
} 