/*
//LOADER

var THREE = window.THREE = require('three');
require('three/examples/js/loaders/GLTFLoader');

var loader = new THREE.GLTFLoader();

loader.load( 'public/resources/assets/manul.gltf', function ( gltf ) {

    scene.add( gltf.scene );

}, undefined, function ( error ) {

    console.error( error );

} );*/



//RENDERER

var renderer = new THREE.WebGLRenderer({canvas: document.getElementById('myCanvas'), antialias: true, alpha: true});
renderer.setClearColor(0x00ff00);
renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize(500, 300);
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

//GEOMETRY
var geometry = new THREE.CubeGeometry(200, 200, 200);


//MATERIAL
var material = new THREE.MeshLambertMaterial({color: 0x7E807E});;

var mesh = new THREE.Mesh(geometry, material);
mesh.position.set(40, -100, -900);

scene.add(mesh);


//ANIMATION
requestAnimationFrame(render);

function render(){
    mesh.rotation.x += 0.01;
    mesh.rotation.y += 0.03;
    renderer.render(scene, camera);
    requestAnimationFrame(render);
}

renderer.render(scene, camera);



/*document.body.appendChild(renderer.domElement)*/
