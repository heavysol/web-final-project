/* Created on 25 Nov '24 */
import gameState from "../game/GameState.js";

// Game scene
gameState.width = 640;
gameState.height = 360;
export const game_w = gameState.width
export const game_h = gameState.height

export const scores_vals = {
    x: (5/6) * game_w,
    y: (1/8) * game_h,
    width: game_w / 20,
    height: game_h / 10,
    style: {
        fontFamily: 'sans-serif', backgroundColor: 'black'
    }
}

export const timer_vals = {
    x: (1/6) * game_w,
    y: (1/8) * game_h,
    width: game_w / 20,
    height: game_h / 10,
    style: {
        fontFamily: 'sans-serif', backgroundColor: 'red'
    }
}