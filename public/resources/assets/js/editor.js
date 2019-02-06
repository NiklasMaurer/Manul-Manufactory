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
renderer.setSize(400, 400);
renderer.setClearColor( 0x000000, 0 );
renderer.gammaOutput = true;
renderer.gammaFactor = 2.2;





/*var test = new THREE.CubeGeometry(200, 200, 200);*/

//CAMERA
/*var camera = new THREE.PerspectiveCamera(35, window.innerWidth / window.innerHeight, 0.1, 3000);*/
var camera = new THREE.PerspectiveCamera( 10, window.innerWidth / window.innerHeight, 0.1, 3000);
/*camera.position.z = 20;*/
/*camera.rotateZ(0.1);*/
/*camera.position.x = 1;
camera.lookAt(test.position);*/

/*window.addEventListener( 'resize', onWindowResize, false );



function onWindowResize() {

    camera.aspect = renderer.clientWidth / renderer.clientHeight;

    camera.updateProjectionMatrix();

    renderer.setSize(renderer.clientWidth, renderer.clientHeight);
}*/





//SCENE
var scene = new THREE.Scene();


//LIGHT
var light = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(light);

var light1 = new THREE.PointLight(0xffffff, 0.5);
scene.add(light1);

/*var gridHelper = new THREE.GridHelper( 400, 400, 0x0000ff, 0x808080 );
gridHelper.position.y = - 150;
gridHelper.position.x = - 150;
scene.add( gridHelper );*/

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
var path = window.asset.path + '/assets/manul-body.gltf';
var path2 = window.asset.path + '/assets/manul-ears-standard-new.gltf';
var path3 = window.asset.path + '/assets/manul-eyes-test.gltf';
var path4 = window.asset.path + '/assets/manul-nose-standard.gltf';
var path5 = window.asset.path + '/assets/manul-mouth-standard.gltf';
var path6 = window.asset.path + '/assets/manul-tail-standard.gltf';
var path7 = window.asset.path + '/assets/manul-nose-clown.gltf';
var path8 = window.asset.path + '/assets/manul-ears-flipped.gltf';
var path9 = window.asset.path + '/assets/manul-eyes-glasses.gltf';
var path10 = window.asset.path + '/assets/manul-shoes-special-new.gltf';
var path11 = window.asset.path + '/assets/manul-mouth-tongue-test.gltf';
var path12 = window.asset.path + '/assets/manul-tail-dragon.gltf';
var path13 = window.asset.path + '/assets/manul-eyes-pirat.gltf';
var path14 = window.asset.path + '/assets/manul-ears-bunny.gltf';
var path15 = window.asset.path + '/assets/manul-mouth-vampire.gltf';
var path16 = window.asset.path + '/assets/manul-shoes-spikes.gltf';
var path17 = window.asset.path + '/assets/manul-nose-pig.gltf';
var path18 = window.asset.path + '/assets/manul-tail-rat.gltf';
var path19 = window.asset.path + '/assets/manul-nose-elephant.gltf';
var path20 = window.asset.path + '/assets/manul-shoes-special-test.gltf';

var loader = new THREE.GLTFLoader();



/*loader.load( path, function ( gltf ) {
    console.log(gltf);
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene.children[1];

    mesh.material = new THREE.MeshLambertMaterial();
    mesh.position.set(-1, 1, -15);
    mesh.rotateY(80);
    mesh.castShadow = true;
    /!*mesh.position.z = -40;*!/

    /!*var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );*!/

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );
    /!*scene.add( material );*!/

  /!*  requestAnimationFrame(render);

    function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }*!/

}, undefined, function ( e ) {

    console.error( e );

} );*/

loader.load( path, function ( gltf ) {

    /*var material = new THREE.MeshNormalMaterial();*/
    var body = gltf.scene;
    var mesh = gltf.scene.children[0];
    var mesh1 = gltf.scene.children[1];
    var mesh2 = gltf.scene.children[2];
    var mesh3 = gltf.scene.children[3];
    var mesh4 = gltf.scene.children[4];
    var mesh5 = gltf.scene.children[5];

    body.position.set(0, -1.7, -20);
    body.rotateY(80);
    body.castShadow = true;


    mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(0);
    mesh.rotateX(0);
    mesh.rotateZ(1.5);
    mesh.castShadow = true;


    mesh1.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1}); //l_leg
    mesh1.position.set(0, -1.65, -20.1);
    mesh1.rotateY(0.285);
    mesh1.rotateX(0.5);
    mesh1.rotateZ(1.5);
    mesh1.castShadow = true;


    mesh2.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1}); //r_arm
    mesh2.position.set(0, -1.7, -20);
    mesh2.rotateY(0);
    mesh2.rotateX(0);
    mesh2.rotateZ(1.5);
    mesh2.castShadow = true;

    mesh3.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1}); //body
    mesh3.position.set(0, -1.7, -20);
    mesh3.rotateY(0);
    mesh3.rotateX(0);
    mesh3.rotateZ(1.5);
    mesh3.castShadow = true;


    mesh4.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1}); //r_leg
    mesh4.position.set(0, -1.7, -20);
    mesh4.rotateY(0);
    mesh4.rotateX(0);
    mesh4.rotateZ(1.5);
    mesh4.castShadow = true;


    mesh5.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1}); //head
    mesh5.position.set(0, -1.7, -20);
    mesh5.rotateY(0);
    mesh5.rotateX(0);
    mesh5.rotateZ(1.5);
    mesh5.castShadow = true;
    /*mesh.position.z = -40;*/

    /*var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );*/

    /*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*/
    scene.add( mesh, mesh1, mesh2, mesh3, mesh4, mesh5, body );

    /*camera.position.x = 50;
    camera.position.y = 10.7;
    camera.position.z = 10.7;*/
    /*camera.lookAt(mesh3.position);*/

    console.log('yes', body);
    /*scene.add( material );*/

      requestAnimationFrame(render);
      /*

      function render(){
          mesh.rotation.z += 0.01;
          mesh1.rotation.z += 0.01;
          mesh2.rotation.z += 0.01;
          mesh3.rotation.z += 0.01;
          mesh4.rotation.z += 0.01;
          mesh5.rotation.z += 0.01;
          renderer.render(scene, camera);
          requestAnimationFrame(render);
      }*/

}, undefined, function ( e ) {

    console.error( e );

} );

/*loader.load( path2, function ( gltf ) {
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene.children[0];
    var mesh1 = gltf.scene.children[1];

    mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(0);
    mesh.rotateX(0);
    mesh.rotateZ(1.5);
    mesh.castShadow = true;

    mesh1.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
    mesh1.position.set(0, -1.7, -20);
    mesh1.rotateY(0);
    mesh1.rotateX(0);
    mesh1.rotateZ(1.5);
    mesh1.castShadow = true;
    /!*mesh.position.z = -40;*!/

    /!*  var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
      scene.add( vnh );
*!/
    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh, mesh1 );
    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    /!* function render(){
         mesh.rotation.x += 0.00;
         mesh.rotation.y += 0.01;
         renderer.render(scene, camera);
         requestAnimationFrame(render);
     }*!/



}, undefined, function ( e ) {

    console.error( e );

} );*/

loader.load( path3, function ( gltf ) {


    var mesh = gltf.scene.children[0];
    var mesh1 = gltf.scene.children[1];
    var mesh2 = gltf.scene.children[2];
    var mesh3 = gltf.scene.children[3];
    var mesh4 = gltf.scene.children[4];
    var mesh5 = gltf.scene.children[5];

    mesh.material = new THREE.MeshLambertMaterial({color: 0x1A1A1A, transparent: true, opacity: 1}); //l_Pupille
    mesh.position.set(0.53, 0.35, -19.038);
    mesh.rotateY(0);
    mesh.rotateX(0);
    mesh.rotateZ(1.5);
    mesh.castShadow = true;


    mesh1.material = new THREE.MeshLambertMaterial({color: 0x1A1A1A, transparent: true, opacity: 1}); //r_Pupille
    mesh1.position.set(-0.4, 0.35, -18.96);
    mesh1.rotateY(0);
    mesh1.rotateX(0);
    mesh1.rotateZ(1.5);
    mesh1.castShadow = true;


    mesh2.material = new THREE.MeshPhongMaterial({color: 0x3F7393, transparent: true, opacity: 1}); //r_Iris
    mesh2.position.set(-0.4, 0.35, -19);
    mesh2.rotateY(0);
    mesh2.rotateX(0);
    mesh2.rotateZ(1.5);
    mesh2.castShadow = true;

    mesh3.material = new THREE.MeshPhongMaterial(); //Auge
    mesh3.position.set(0, -1.7, -20);
    mesh3.rotateY(0);
    mesh3.rotateX(0);
    mesh3.rotateZ(1.5);
    mesh3.castShadow = true;

    mesh4.material = new THREE.MeshPhongMaterial(); //Auge
    mesh4.position.set(0, -1.7, -20);
    mesh4.rotateY(0);
    mesh4.rotateX(0);
    mesh4.rotateZ(1.5);
    mesh4.castShadow = true;

    mesh5.material = new THREE.MeshLambertMaterial({color: 0x3F7393, transparent: true, opacity: 1}); //l_Iris
    mesh5.position.set(0.53, 0.35, -19.08);
    mesh5.rotateY(0);
    mesh5.rotateX(0);
    mesh5.rotateZ(1.5);
    mesh5.castShadow = true;

    /*console.log(mesh, mesh1, mesh2, mesh3, mesh4, mesh5);*/

    scene.add( mesh, mesh1, mesh2, mesh3, mesh4, mesh5);


    requestAnimationFrame(render);

    /* function render(){
         mesh.rotation.x += 0.00;
         mesh.rotation.y += 0.01;
         renderer.render(scene, camera);
         requestAnimationFrame(render);
     }*/

}, undefined, function ( e ) {

    console.error( e );

} );

loader.load( path4, function ( gltf ) {
    /*var material = new THREE.MeshNormalMaterial();*/
    var mesh = gltf.scene.children[0];

    mesh.material = new THREE.MeshLambertMaterial({color: 0xFFB0BB, transparent: true, opacity: 1});
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(0);
    mesh.rotateX(0);
    mesh.rotateZ(1.5);
    mesh.castShadow = true;

    /*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*/
    scene.add( mesh );
    /*scene.add( material );*/

    requestAnimationFrame(render);

    /*function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }*/

}, undefined, function ( e ) {

    console.error( e );

} );

loader.load( path5, function ( gltf ) {
    /*var material = new THREE.MeshNormalMaterial();*/
    var mesh = gltf.scene.children[0];

    mesh.material = new THREE.MeshLambertMaterial({color: 0x222222, transparent: true, opacity: 1});
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(0);
    mesh.rotateX(0);
    mesh.rotateZ(1.5);
    mesh.castShadow = true;
    /*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*/
    scene.add( mesh );
    /*scene.add( material );*/

    requestAnimationFrame(render);

    /*function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }*/

}, undefined, function ( e ) {

    console.error( e );

} );

/*loader.load( path6, function ( gltf ) {
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene.children[0];

    mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(0);
    mesh.rotateX(0);
    mesh.rotateZ(1.5);
    mesh.castShadow = true;

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );



    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    /!*function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }*!/

}, undefined, function ( e ) {

    console.error( e );

} );*/



/*loader.load( path2, function ( gltf ) {
    console.log(gltf);
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene;

    mesh.material = new THREE.MeshLambertMaterial();
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(80);
    mesh.castShadow = true;
    /!*mesh.position.z = -40;*!/

    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );
    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }

}, undefined, function ( e ) {

    console.error( e );

} );

loader.load( path3, function ( gltf ) {
    console.log(gltf);
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene;

    mesh.material = new THREE.MeshLambertMaterial();
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(80);
    mesh.castShadow = true;
    /!*mesh.position.z = -40;*!/

    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );
    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }

}, undefined, function ( e ) {

    console.error( e );

} );

loader.load( path4, function ( gltf ) {
    console.log(gltf);
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene;

    mesh.material = new THREE.MeshLambertMaterial();
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(80);
    mesh.castShadow = true;
    /!*mesh.position.z = -40;*!/

    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );
    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }

}, undefined, function ( e ) {

    console.error( e );

} );

loader.load( path5, function ( gltf ) {
    console.log(gltf);
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene;

    mesh.material = new THREE.MeshLambertMaterial();
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(80);
    mesh.castShadow = true;
    /!*mesh.position.z = -40;*!/

    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );
    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }

}, undefined, function ( e ) {

    console.error( e );

} );

loader.load( path6, function ( gltf ) {
    console.log(gltf);
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene;

    mesh.material = new THREE.MeshLambertMaterial();
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(80);
    mesh.castShadow = true;
    /!*mesh.position.z = -40;*!/

    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );
    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }

}, undefined, function ( e ) {

    console.error( e );

} );

loader.load( path7, function ( gltf ) {
    console.log(gltf);
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene;

    mesh.material = new THREE.MeshLambertMaterial();
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(80);
    mesh.castShadow = true;
    /!*mesh.position.z = -40;*!/

    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );
    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }

}, undefined, function ( e ) {

    console.error( e );

} );*/

/*loader.load( path8, function ( gltf ) {
    console.log(gltf);
    /!*var material = new THREE.MeshNormalMaterial();*!/
    var mesh = gltf.scene;

    mesh.material = new THREE.MeshLambertMaterial();
    mesh.position.set(0, -1.7, -20);
    mesh.rotateY(80);
    mesh.castShadow = true;
    /!*mesh.position.z = -40;*!/

    var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
    scene.add( vnh );

    /!*gltf.scene.traverse( function ( child ) {

        if ( child.isMesh ) {

            child.material.envMap = background;

        }

    } );
*!/
    scene.add( mesh );
    /!*scene.add( material );*!/

    requestAnimationFrame(render);

    function render(){
        mesh.rotation.x += 0.00;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
        requestAnimationFrame(render);
    }

}, undefined, function ( e ) {

    console.error( e );

} );*/






//GEOMETRY
var geometry = new THREE.CubeGeometry(2, 2, 2);

/*var material = new THREE.MeshNormalMaterial();*/


//MATERIAL
/*var material = new THREE.MeshLambertMaterial({color: 0x7E807E});*/

var mesh = new THREE.Mesh(geometry/*, material*/);
/*mesh.position.set(40, -70, -800);*/
mesh.position.set(0, 0, -20);

/*scene.add(mesh);*/


//ANIMATION
/*requestAnimationFrame(render);

function render(){
    mesh.rotation.x += 0.01;
    mesh.rotation.y += 0.03;
    renderer.render(scene, camera);
    requestAnimationFrame(render);
}*/

//RENDER LOOP
render();

/*var delta = 0;

var light2 = new THREE.PointLight(0xffffff, 0.5);

light2.position.z = -100;
light2.target = mesh;
scene.add(light2);*/

function render(){

    /*delta += 0.001;

    camera.lookAt(mesh.position);
    /!*camera.position.y = 15;*!/
    camera.position.x = Math.sin(delta)*50;
    camera.position.z = Math.cos(delta)*50;*/

    renderer.render(scene, camera);

    requestAnimationFrame(render);
}

renderer.render(scene, camera);



/*document.body.appendChild(renderer.domElement)*/




