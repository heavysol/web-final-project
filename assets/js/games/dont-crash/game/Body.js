/* Created on 2 July '24 */

export class Body {
    constructor(scene, width, height, img) {
        this.scene = scene;
        this.width = width;
        this.height = height;
        this.img = img;
    }

    createBody(element) {
        if (element == 'sprite') return this.scene.physics.add.sprite(this.width, this.height, this.img); //
        else if (element == 'group') return this.scene.physics.add.group(); //
    }
}