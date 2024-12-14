/* Created on 24 Apr '24 */

export class Prompt {
    constructor(scene, prompt, colour) {
        this.t = null;

        this.scene = scene;
        this.prompt = prompt;
        this.colour = colour;
    }

    make(width, height, size) {
        this.t = this.scene.add.text(
            width,
            height,
            this.prompt,
            {
                fontSize: `${size}px`,
                color: this.colour,
                fontFamily: 'Times New Roman',
                align: 'center'
            }
        );
        this.t.setOrigin(0.5);
    }

    isVisible(bool) {
        this.t.setVisible(bool);
    }

    del() {
        this.t = null;
    }
}