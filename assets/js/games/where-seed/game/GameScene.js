/* Created on 27 Apr '24 */

import { Picture } from "../objects/Picture.js";
import { Scores } from "../objects/Scores.js";
import { TrueSeed } from "../objects/TrueSeed.js";
import gameState from "./GameState.js";
import "../utils/static_vals.js";
import { game_w, game_h, scores_vals, timer_vals } from "../utils/static_vals.js";
import { Seed } from "../objects/Seed.js";
import { Timer } from "../objects/Timer.js";

export class GameScene extends Phaser.Scene {
    constructor() {
        super({key: 'GameScene'});
    }

    preload() {
        this.load.image('seed', '../assets/images/where-seed-assets/seed.png');
        this.load.image('pic', '../assets/images/where-seed-assets/mandalas.jpg');
    }

    create() {
        //const score_pos = n
        gameState.isTrueSeedFound = false;
        gameState.isFakeSeedFound = false;
        gameState.mustRestartGame = false;

        gameState.picture = new Picture(this, game_w / 2, game_h / 2, game_w, game_h, 'pic');
        gameState.scores = new Scores(this, scores_vals.x, scores_vals.y, 0, {fontFamily: 'sans-serif', backgroundColor: 'black'}, game_w / 20, game_h / 10);
        gameState.true_seed = new TrueSeed(this, null, null, game_w / 20, game_h / 20, 'seed');
        gameState.true_seed.setRandomPosition();
        gameState.true_seed.selectTrueSeed();
        console.log(gameState.true_seed.x, gameState.true_seed.y)
        gameState.timer = new Timer(this, timer_vals.x, timer_vals.y, 5, {fontFamily: 'sans-serif', backgroundColor: 'green'}, game_w / 20, game_h / 10)
        gameState.timer.updateTimer();
    }

    update() {
        if (!gameState.mustRestartGame) this.isSeedFound();
        if (gameState.mustRestartGame) this.restartGame();
    }

    isSeedFound() {
        if (gameState.isTrueSeedFound && gameState.timer.text > 0) this.printMessageAtGameEnd('Seed found!', 'black');
        else if (!gameState.isTrueSeedFound && gameState.timer.text <= 0) this.printMessageAtGameEnd('Seed NOT found\nGame over', 'red');
    }

    restartGame() {
        console.log('recommencer')
        gameState.after_seed_click.destroy();
        gameState.mustRestartGame = false;
        Seed.enableSeedInteractivity(gameState.true_seed);
        gameState.timer.resetTimer(5);
    }

    printMessageAtGameEnd(text, background_colour) {
        Seed.disableSeedInteractivity(gameState.true_seed);
        gameState.timer.timer.paused = true;
        gameState.after_seed_click = this.add.text(game_w / 3, game_h / 2, text, {fontSize: '24pt', fontFamily: 'sans-serif', color: 'white', backgroundColor: background_colour});
        gameState.after_seed_click.setDepth(80);
        setTimeout(() => { gameState.mustRestartGame = true; }, 1500);
    }
}