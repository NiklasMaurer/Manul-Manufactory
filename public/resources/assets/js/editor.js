// Instantiate a loader
var loader = new THREE.GLTFLoader();

// Optional: Provide a DRACOLoader instance to decode compressed mesh data
THREE.DRACOLoader.setDecoderPath( '/examples/js/libs/draco' );
loader.setDRACOLoader( new THREE.DRACOLoader() );

// Load a glTF resource
loader.load(
    // resource URL
    'public/resources/assets/manul.gltf',
    // called when the resource is loaded
    function ( gltf ) {

        scene.add( gltf.scene );

        gltf.animations; // Array<THREE.AnimationClip>
        gltf.scene; // THREE.Scene
        gltf.scenes; // Array<THREE.Scene>
        gltf.cameras; // Array<THREE.Camera>
        gltf.asset; // Object

    },
    // called while loading is progressing
    function ( xhr ) {

        console.log( ( xhr.loaded / xhr.total * 100 ) + '% loaded' );

    },
    // called when loading has errors
    function ( error ) {

        console.log( 'An error happened' );

    }
);