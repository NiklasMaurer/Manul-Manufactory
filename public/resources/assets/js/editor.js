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
renderer.setSize(300, 400);
renderer.setClearColor( 0x000000, 0 );


//CAMERA
/*var camera = new THREE.PerspectiveCamera(35, window.innerWidth / window.innerHeight, 0.1, 3000);*/
var camera = new THREE.PerspectiveCamera( 10, window.innerWidth / window.innerHeight, 0.1, 3000);


//SCENE
var scene = new THREE.Scene();


//LIGHT
var light = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(light);

var light1 = new THREE.PointLight(0xffffff, 0.5);
scene.add(light1);

var gridHelper = new THREE.GridHelper( 400, 400, 0x0000ff, 0x808080 );
gridHelper.position.y = - 150;
gridHelper.position.x = - 150;
scene.add( gridHelper );

//MODEL
/*var loader = new THREE.GLTFLoader();

var path = window.asset.path + '/assets/manul.gltf';
console.log(path);
loader.load(path, handle_load);

function handle_load(gltf){
    //console.log(gltf)
    /!*
    var mesh = new THREE.Mesh(geometry, materials);
    scene.add(mesh);
    mesh.position.z = -10;*!/
}*/

// model
var path = window.asset.path + '/assets/manul7.gltf';
var loader = new THREE.GLTFLoader();
loader.load( path, function ( gltf ) {
    console.log(gltf);
    var mesh = gltf.scene.children[ 0 ];
    mesh.position.z = -100;
    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*/
    scene.add( gltf.scene );

}, undefined, function ( e ) {

    console.error( e );

} );

//GEOMETRY
var geometry = new THREE.CubeGeometry(200, 200, 200);


//MATERIAL
var material = new THREE.MeshLambertMaterial({color: 0x7E807E});

var mesh = new THREE.Mesh(geometry, material);
/*mesh.position.set(40, -70, -800);*/

/*/scene.add(mesh);*/


//ANIMATION
requestAnimationFrame(render);

function render(){
    mesh.rotation.x += 0.01;
    mesh.rotation.y += 0.03;
    renderer.render(scene, camera);
    requestAnimationFrame(render);
}

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
