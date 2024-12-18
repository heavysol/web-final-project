import '../utils/static_vals.js'
import { GameScene } from './GameScene.js';
import gameState from './GameState.js';

const config = {
    width: gameState.width,
    height: gameState.height,
    backgroundColor: 0x000000,
    type: Phaser.AUTO,
    physics: {
        default: 'arcade', 
        arcade: {
            enableBody: true,
            debug: false,
        },
        parent: 'game_screen',
        dom: { createContainer: true },
    },
    scene: GameScene
};

const game = new Phaser.Game(config);
const container = document.getElementById('game_screen').appendChild(game.canvas);