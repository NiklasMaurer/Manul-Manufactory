// model
var path = window.asset.path + '/assets/manul7.gltf';
var loader = new THREE.GLTFLoader();

loader.load( path, function ( gltf ) {
    console.log(gltf);
    var material = new THREE.MeshNormalMaterial();
    var mesh = gltf.scene;
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(90);
    /*mesh.position.z = -40;*/

    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*/
    scene.add( mesh );

}, undefined, function ( e ) {

    console.error( e );

} );

























// model
var path = window.asset.path + '/assets/manul7.gltf';
var loader = new THREE.GLTFLoader();

loader.load( path, function ( gltf ) {
    console.log(gltf);
    /*var scale = 5.6;*/
    mesh.body = gltf.scene;
    mesh.body.name = "body";
    mesh.rotateY(90);
    mesh.position.set(0, -1.7, -20);
    mesh.frame.add(mesh.body);
    /*var mesh = gltf.scene;*/


    /*mesh.position.z = -40;*/

    /* var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
     scene.add( vnh );*/

    /*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*/
    scene.add( mesh.frame );

}, undefined, function ( e ) {

    console.error( e );

} );

//schlecht
// model
var path = window.asset.path + '/assets/manul7.gltf';
var loader = new THREE.GLTFLoader();

loader.load( path, handle_load);
/*console.log(handle_load);*/
/*var material = new THREE.MeshNormalMaterial();*/
/*var mesh = handle_load.scene;*/

function handle_load(path) {

    var material = new THREE.MeshNormalMaterial();
    var mesh = new THREE.Mesh(path, material);
    scene.add(mesh);


    /*var mesh = new THREE.Mesh(path, material);*/
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(90);
    /*mesh.position.z = -40;*/

}


/* var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
 scene.add( vnh );*/

/*gltf.scene.traverse( function ( child ) {

    if ( child.isMesh ) {

        child.material.envMap = background;

    }

} );
*/


/*}, undefined, function ( e ) {

    console.error( e );

} );*/