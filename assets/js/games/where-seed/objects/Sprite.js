/* Created on 2 July '24 */

import { Body } from "./Body.js";
import gameState from "../game/GameState.js";

// Change width and height attributes to x and y respectively: they reflect the initial position of the sprite at game's start
export class Sprite extends Body {
    constructor(scene, img, x, y, width, height) {
        super(scene, img);
        this.x = x;
        this.y = y;
        this.width = width;
        this.height = height;
    }

    createSprite() {
        // Change gameState attributes to x and y
        let s = this.scene.physics.add.sprite(this.x, this.y, this.img);
        s.displayWidth = this.width;
        s.displatyHeight = this.height;
        return s;
    }
}