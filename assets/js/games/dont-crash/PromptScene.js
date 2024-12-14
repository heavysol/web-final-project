/* Created on 1 May '24 */

import { Prompt } from "./Prompt-Text-folder/index.js";
import gameState from "./GameState.js";

export class PromptScene extends Phaser.Scene {
    constructor(sceneKey, prompt, button, startScene) {
        super({key: sceneKey});
        this.sceneKey = sceneKey;
        this.prompt = prompt; // Prompt message to be shown on screen
        this.button = button; // Button to be pressed to start the next scene, startScene; note for now only Latin script letters are accepted
        this.startScene = startScene; // Scene to be transitioned to from this prompt screen
    }

    create() { // creates and displays prompt, and adds functionality to transition to startScene upon pressed the desired button
        let prom = new Prompt(this, this.prompt, 'white');
        prom.make(gameState.width / 2, gameState.height / 2, 22);
        let t = this.scene.scene; // intermediate var for accessing the scene attribute of this scene (StartScene) for the input attribute within the former (its value's an obj)
        t.input.keyboard.on('keydown', e => {
            if (e.key === this.button.toLowerCase() || e.key === this.button.toUpperCase()) {
                prom.isVisible(false);
                this.scene.stop(this.sceneKey);
                this.scene.start(this.startScene);
            }
        })
    }

    setPrompt(newPrompt) {
        this.prompt = newPrompt;
    }
}
