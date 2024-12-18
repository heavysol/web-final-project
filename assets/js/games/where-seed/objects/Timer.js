/* Created by 30 Sep '24 */

import gameState from "../game/GameState.js";

export class Timer extends Phaser.GameObjects.Text {
    constructor(scene, x, y, text, style, width, height) {
        super(scene, x, y, text, style);
        this.setDisplaySize(width, height);
        this.setDepth(50);
        this.timer = null;
        scene.add.existing(this);
    }

    updateTimer() {
        this.timer = this.scene.time.addEvent({
            delay: 1000,
            callback: this.decreTime,
            callbackScope: this,
            loop: true
        });
    }

    resetTimer(time) {
        this.setText(time);
        this.timer.paused = false;
    }

    decreTime() {
        if (this.text > 0) this.setText(--this.text)
        else this.timer.paused = true;
    }
}