
//LOADER
/*

/!*var THREE = window.THREE = require('three');
require('three/examples/js/loaders/GLTFLoader');*!/

var loader = new THREE.GLTFLoader();

loader.load( 'public/resources/assets/manul.gltf', function ( gltf ) {

    scene.add( gltf.scene );

}, undefined, function ( error ) {

    console.error( error );

} );
*/

//Function Camera

function frameArea(sizeToFitOnScreen, boxSize, boxCenter, camera) {
    const halfSizeToFitOnScreen = sizeToFitOnScreen * 0.5;
    const halfFovY = THREE.Math.degToRad(camera.fov * .5);
    const distance = halfSizeToFitOnScreen / Math.tan(halfFovY);

    // compute a unit vector that points in the direction the camera is now
// in the xz plane from the center of the box
    const direction = (new THREE.Vector3())
        .subVectors(camera.position, boxCenter)
        .multiply(new THREE.Vector3(1, 0, 1))
        .normalize();

    // move the camera to a position distance units way from the center
    // in whatever direction the camera was from the center already
    camera.position.copy(direction.multiplyScalar(distance).add(boxCenter));

    // pick some near and far values for the frustum that
    // will contain the box.
    camera.near = boxSize / 100;
    camera.far = boxSize * 100;

    camera.updateProjectionMatrix();

    // point the camera to look at the center of the box
    camera.lookAt(boxCenter.x, boxCenter.y, boxCenter.z);
}

{
    const gltfLoader = new THREE.GLTFLoader();
    const url = 'resources/assets/manul.gltf';
    gltfLoader.load(url, (gltf) => {
        const root = gltf.scene;
    scene.add(root);
    // compute the box that contains all the stuff
    // from root and below
    const box = new THREE.Box3().setFromObject(root);

    const boxSize = box.getSize(new THREE.Vector3()).length();
    const boxCenter = box.getCenter(new THREE.Vector3());

    // set the camera to frame the box
    frameArea(boxSize * 1.2, boxSize, boxCenter, camera);

    // update the Trackball controls to handle the new size
    controls.maxDistance = boxSize * 10;
    controls.target.copy(boxCenter);
    controls.update();
});






};


//RENDERER

var renderer = new THREE.WebGLRenderer({canvas: document.getElementById('myCanvas'), antialias: true, alpha: true});
renderer.setClearColor(0x00ff00);
renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize(300, 400);
renderer.setClearColor( 0x000000, 0 );


//CAMERA
var camera = new THREE.PerspectiveCamera(35, window.innerWidth / window.innerHeight, 0.1, 3000);


//SCENE
var scene = new THREE.Scene();


//LIGHT
var light = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(light);

var light1 = new THREE.PointLight(0xffffff, 0.5);
scene.add(light1);


//MODEL
/*var loader = new THREE.JSONLoader();
loader.load('/resources/assets/manul.json', handle_load);

function handle_load(geometry, materials){
    var mesh = new THREE.Mesh(geometry, materials);
    scene.add(mesh);
    mesh.position.z = -10;
}*/

//GEOMETRY
/*var geometry = new THREE.CubeGeometry(200, 200, 200);*/


//MATERIAL
/*var material = new THREE.MeshLambertMaterial({color: 0x7E807E});;

var mesh = new THREE.Mesh(geometry, material);
mesh.position.set(40, -70, -800);

scene.add(mesh);*/


//ANIMATION
/*requestAnimationFrame(render);

function render(){
    mesh.rotation.x += 0.01;
    mesh.rotation.y += 0.03;
    renderer.render(scene, camera);
    requestAnimationFrame(render);
}*/

//RENDER LOOP
/*
render();

function render(){
    renderer.render(scene, camera);

    requestAnimationFrame(render);
}
*/

renderer.render(scene, camera);



/*document.body.appendChild(renderer.domElement)*/
