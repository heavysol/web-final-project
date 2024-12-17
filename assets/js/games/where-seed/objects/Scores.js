/* Created by 30 Sep '24 */

import gameState from "../game/GameState.js";

export class Scores extends Phaser.GameObjects.Text {
    constructor(scene, x, y, text, style, width, height) {
        super(scene, x, y, text, style);
        this.setDisplaySize(width, height);
        this.setDepth(50);
        scene.add.existing(this);
    }

    updateScore() {
        this.setText(++this.text);
        console.log(this.text)
    }
}