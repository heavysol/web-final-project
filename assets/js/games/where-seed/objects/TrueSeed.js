/* Created by 29 Sep '24 */

import gameState from "../game/GameState.js";
import { Seed } from "./Seed.js";

export class TrueSeed extends Seed {
    constructor(scene, x, y, width, height, texture) {
        super(scene, x, y, width, height, texture);
    }

    selectTrueSeed() {
        this.on('pointerdown', () => { this.trueSeedFound(); });
    }

    trueSeedFound() {
        gameState.isTrueSeedFound = true;
        gameState.scores.updateScore();
        console.log('cliqué');
    }
} 