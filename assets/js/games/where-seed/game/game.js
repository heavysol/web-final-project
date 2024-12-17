import '../utils/static_vals.js'
import { GameScene } from './GameScene.js';
import gameState from './GameState.js';

/*export const endScene = new PromptScene('EndScene', '', 'k', 'GameScene');
export const gameScene = new GameScene(endScene);
export const startScene = new PromptScene('StartScene', 'Welcome to this endless runner!\nPress k on your keyboard to play', 'k', 'GameScene');*/

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
        }
    },
    scene: GameScene
};

const game = new Phaser.Game(config);