(function ($, undefined) {
    $(document).ready(function () {

        console.log('hi');

        $('.menu-icon').on('click', function () {

            if ($('.start_nav').is(':visible')) {
                $('.start_nav').slideUp();
            } else {
                $('.start_nav').slideDown();
            }
        });

        $('.content').on('click', function () {
            $('.start_nav').slideUp();
        });


    });

 /*   if($('.wrapper-canvas')) {
        console.log('elemnt vorhanden')
    }*/

})(jQuery);


(function ($, undefined) {
    $(document).ready(function () {
        var customCat = {};

        $('.bodypart-id-1').show();


        $('#bodypart-ears').on('click', function () {

            $('.type-editor>li').hide();
            $('.bodypart-id-1').show();
        });


        $('#bodypart-eyes').on('click', function () {

            $('.type-editor>li').hide();
            $('.bodypart-id-2').show();
        });


        $('#bodypart-nose').on('click', function () {

            $('.type-editor>li').hide();
            $('.bodypart-id-3').show();
        });


        $('#bodypart-mouth').on('click', function () {

            $('.type-editor>li').hide();
            $('.bodypart-id-4').show();
        });


        $('#bodypart-tail').on('click', function () {

            $('.type-editor>li').hide();
            $('.bodypart-id-5').show();
        });


        $('#bodypart-shoes').on('click', function () {

            $('.type-editor>li').hide();
            $('.bodypart-id-6').show();
        });


    });
})(jQuery);

//console.log(bricks);


(function ($, undefined) {
    var cart = {
        1: 7,
        2: 2,
        3: 3,
        4: 6,
        5: 8,
        6: 1
    };


    function addToCart(region, type) {
        cart[region] = type;
    }

    function isInSceneAndGet(name) {
        return scene.getObjectByName(name)
    }



    $(document).ready(function () {


        $('#1-standard').on('click', function () {
            var sceneObj = isInSceneAndGet(1);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }
                addToCart(1, 7);

                loader.load(path2, function (gltf) {
                    /*var material = new THREE.MeshNormalMaterial();*/
                    var mesh = gltf.scene.children[0];
                    mesh.name = 1;

                    console.log(mesh);

                    /*var mesh1 = gltf.scene.children[1];
                    mesh1.name = 7;*/

                    mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
                    mesh.position.set(0, -1.7, -20);
                    mesh.rotateY(0);
                    mesh.rotateX(0);
                    mesh.rotateZ(1.5);
                    mesh.castShadow = true;

                    /*mesh1.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
                    mesh1.position.set(0, -1.7, -20);
                    mesh1.rotateY(0);
                    mesh1.rotateX(0);
                    mesh1.rotateZ(1.5);
                    mesh1.castShadow = true;*/
                    /*mesh.position.z = -40;*/

                    /*  var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
                      scene.add( vnh );
      */
                    /*gltf.scene.traverse( function ( child ) {

                        if ( child.isMesh ) {

                            child.material.envMap = background;

                        }

                    } );
                */
                    scene.add(mesh);
                    /*scene.add( material );*/

                    requestAnimationFrame(render);

                    /* function render(){
                         mesh.rotation.x += 0.00;
                         mesh.rotation.y += 0.01;
                         renderer.render(scene, camera);
                         requestAnimationFrame(render);
                     }*/

                }, undefined, function (e) {

                    console.error(e);

                });

                /*if($(path2).is(':visible')){
                    $(path2).hide();
                    console.log(path2);
                }else{
                    $(path2).load();
                    console.log($(path2));
                }*/



        });

        $('#1-flipped').on('click', function () {

            /*console.log(addToCart(1, 13));*/

            var sceneObj = isInSceneAndGet(1);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(1, 13);

            loader.load(path2, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 1;

                /*var mesh1 = gltf.scene.children[1];*/

                /*mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
                mesh.position.set(0, -1.7, -20);
                mesh.rotateY(0);
                mesh.rotateX(0);
                mesh.rotateZ(1.5);
                mesh.castShadow = true;*/

                mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
                mesh.position.set(0, -1.7, -20);
                mesh.rotateY(0);
                mesh.rotateX(0);
                mesh.rotateZ(-1.5);
                mesh.castShadow = true;

                /*mesh.position.z = -40;*/

                /*  var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
                  scene.add( vnh );
  */
                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /* function render(){
                     mesh.rotation.x += 0.00;
                     mesh.rotation.y += 0.01;
                     renderer.render(scene, camera);
                     requestAnimationFrame(render);
                 }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#1-bunny').on('click', function () {

            var sceneObj = isInSceneAndGet(1);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

                addToCart(1, 18);

                loader.load(path14, function (gltf) {
                    console.log(gltf);
                    /*var material = new THREE.MeshNormalMaterial();*/
                    var mesh = gltf.scene.children[0];
                    mesh.name = 1;


                    mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
                    mesh.position.set(0.1, 0.5, -20);
                    mesh.rotateY(0);
                    mesh.rotateX(1.5);
                    mesh.rotateZ(-0.5);
                    mesh.castShadow = true;


                    /*mesh.position.z = -40;*/

                    /*  var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
                      scene.add( vnh );
      */
                    /*gltf.scene.traverse( function ( child ) {

                        if ( child.isMesh ) {

                            child.material.envMap = background;

                        }

                    } );
                */
                    scene.add(mesh);
                    /*scene.add( material );*/

                    requestAnimationFrame(render);

                    /* function render(){
                         mesh.rotation.x += 0.00;
                         mesh.rotation.y += 0.01;
                         renderer.render(scene, camera);
                         requestAnimationFrame(render);
                     }*/

                }, undefined, function (e) {

                    console.error(e);

                });



        });

        $('#2-standard').on('click', function () {

            var sceneObj = isInSceneAndGet(2);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(2, 2);

            /*loader.load(path3, function (gltf) {


                var mesh = gltf.scene.children[0];
                var mesh1 = gltf.scene.children[1];
                var mesh2 = gltf.scene.children[2];
                var mesh3 = gltf.scene.children[3];
                var mesh4 = gltf.scene.children[4];
                var mesh5 = gltf.scene.children[5];

                mesh.material = new THREE.MeshLambertMaterial({color: 0x1A1A1A, transparent: true, opacity: 1}); //Pupille
                mesh.position.set(0.53, 0.35, -18.959);
                mesh.rotateY(0);
                mesh.rotateX(0);
                mesh.rotateZ(1.5);
                mesh.castShadow = true;


                mesh1.material = new THREE.MeshLambertMaterial({color: 0x1A1A1A, transparent: true, opacity: 1}); //Pupille
                mesh1.position.set(-0.4, 0.35, -18.96);
                mesh1.rotateY(0);
                mesh1.rotateX(0);
                mesh1.rotateZ(1.5);
                mesh1.castShadow = true;


                mesh2.material = new THREE.MeshPhongMaterial({color: 0x3F7393, transparent: true, opacity: 1}); //Iris
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

                mesh5.material = new THREE.MeshLambertMaterial({color: 0x3F7393, transparent: true, opacity: 1}); //Iris
                mesh5.position.set(0.53, 0.35, -19);
                mesh5.rotateY(0);
                mesh5.rotateX(0);
                mesh5.rotateZ(1.5);
                mesh5.castShadow = true;

                console.log(mesh, mesh1, mesh2, mesh3, mesh4, mesh5);

                scene.add(mesh, mesh1, mesh2, mesh3, mesh4, mesh5);


                requestAnimationFrame(render);

                /!* function render(){
                     mesh.rotation.x += 0.00;
                     mesh.rotation.y += 0.01;
                     renderer.render(scene, camera);
                     requestAnimationFrame(render);
                 }*!/

            }, undefined, function (e) {

                console.error(e);

            });
*/
        });

        $('#2-glasses').on('click', function () {

            var sceneObj = isInSceneAndGet(2);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(2, 11);

            loader.load(path9, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 2;

                mesh.material = new THREE.MeshLambertMaterial({color: 0x151515, transparent: true, opacity: 1});
                mesh.position.set(-0.4, 0.35, -18.9);
                mesh.rotateY(0.15);
                mesh.rotateX(0.16);
                mesh.rotateZ(-1.35);
                mesh.castShadow = true;

                /* console.log('scene', gltf.scene.children);

                 console.log('mesh eye', mesh, mesh1);
 */
                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /* function render(){
                     mesh.rotation.x += 0.00;
                     mesh.rotation.y += 0.01;
                     renderer.render(scene, camera);
                     requestAnimationFrame(render);
                 }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#2-pirat').on('click', function () {

            var sceneObj = isInSceneAndGet(2);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(2, 19);

            loader.load(path13, function (gltf) {


                var mesh = gltf.scene.children[0];
                mesh.name = 2;

                mesh.material = new THREE.MeshLambertMaterial({color: 0x1A1A1A, transparent: true, opacity: 1}); //Pupille
                mesh.position.set(0.43, 0.35, -18.95);
                mesh.rotateY(0.5);
                mesh.rotateX(-1.2);
                mesh.rotateZ(-0.39);
                mesh.rotation.z = 1.4;
                mesh.rotation.x = 5.9;
                mesh.rotation.y = -1.3;
                /* mesh.rotateY(0.5);
                 mesh.rotateX(-1.05);
                 mesh.rotateZ(-0.39);*/
                mesh.castShadow = true;


                console.log(mesh);

                scene.add(mesh);


                requestAnimationFrame(render);

                /* function render(){
                     mesh.rotation.x += 0.00;
                     mesh.rotation.y += 0.01;
                     renderer.render(scene, camera);
                     requestAnimationFrame(render);
                 }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#2-funky').on('click', function () {

            var sceneObj = isInSceneAndGet(2);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(1, 20);

            loader.load(path9, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 2;

                mesh.material = new THREE.MeshNormalMaterial({color: 0x151515, transparent: true, opacity: 1});
                mesh.position.set(-0.4, 0.35, -18.9);
                mesh.rotateY(0.15);
                mesh.rotateX(0.16);
                mesh.rotateZ(-1.35);
                mesh.castShadow = true;

                /* console.log('scene', gltf.scene.children);

                 console.log('mesh eye', mesh, mesh1);
 */
                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /* function render(){
                     mesh.rotation.x += 0.00;
                     mesh.rotation.y += 0.01;
                     renderer.render(scene, camera);
                     requestAnimationFrame(render);
                 }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#3-standard').on('click', function () {

            var sceneObj = isInSceneAndGet(3);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(3, 3);

            loader.load(path4, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 3;

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
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#3-clown').on('click', function () {

            var sceneObj = isInSceneAndGet(3);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(3, 14);

            loader.load(path7, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 3;

                mesh.material = new THREE.MeshLambertMaterial({color: 0xFF3133, transparent: true, opacity: 1});
                mesh.position.set(0.071, 0.23, -18.95);
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
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#3-pig').on('click', function () {

            var sceneObj = isInSceneAndGet(3);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(3, 23);

            loader.load(path17, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 3;

                mesh.material = new THREE.MeshLambertMaterial({color: 0xFFB0BB, transparent: true, opacity: 1});
                mesh.position.set(0.069, 0.26, -18.95);
                mesh.rotateY(0.3);
                mesh.rotateX(1.5);
                mesh.rotateZ(0.5);
                mesh.castShadow = true;

                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#3-elephant').on('click', function () {

            var sceneObj = isInSceneAndGet(3);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(3, 25);

            loader.load(path19, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 3;

                mesh.material = new THREE.MeshPhongMaterial({color: 0x545554, transparent: true, opacity: 1});
                mesh.position.set(0.05, 0.4, -19.25);
                mesh.rotateY(0.6);
                mesh.rotateX(1.53);
                mesh.rotateZ(0.52);
                mesh.castShadow = true;
                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#4-standard').on('click', function () {

            var sceneObj = isInSceneAndGet(4);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(4, 6);

            loader.load(path5, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 4;

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
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        /*$('#4-tongue').on('click',function(){

            loader.load( path11, function ( gltf ) {
                console.log(gltf);
                /!*var material = new THREE.MeshNormalMaterial();*!/
                var mesh = gltf.scene.children[0];

                mesh.material = new THREE.MeshLambertMaterial({color: 0xFF7D96, transparent: true, opacity: 1});
                mesh.position.set(-0.05, 0.35, -18.65);
                mesh.rotateY(0.1);
                mesh.rotateX(-1);
                mesh.rotateZ(-0.48);
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

            } );

        });*/

        $('#4-tongue').on('click', function () {

            var sceneObj = isInSceneAndGet(4);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(4, 15);

            loader.load(path11, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 4;

                mesh.material = new THREE.MeshLambertMaterial({color: 0xFF7D96, transparent: true, opacity: 1});
                mesh.position.set(0.065, -0.15, -18.98);
                mesh.rotateY(0.1);
                mesh.rotateX(1.5);
                mesh.rotateZ(0.1);
                mesh.castShadow = true;
                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#4-vampire').on('click', function () {

            var sceneObj = isInSceneAndGet(4);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(4, 21);

            loader.load(path15, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 4;
               /* var mesh1 = gltf.scene.children[1];*/

                mesh.material = new THREE.MeshLambertMaterial({color: 0xFFFFFF, transparent: true, opacity: 1}); //l_tooth
                mesh.position.set(-0.035, 0.12, -19);
                mesh.rotateY(0);
                mesh.rotateX(0);
                mesh.rotateZ(1.5);
                mesh.castShadow = true;

               /* mesh1.material = new THREE.MeshLambertMaterial({color: 0xFFFFFF, transparent: true, opacity: 1}); //r_tooth
                mesh1.position.set(-0.06, 0.15, -18.95);
                mesh1.rotateY(0.1);
                mesh1.rotateX(-1);
                mesh1.rotateZ(-1.6);
                mesh1.castShadow = true;*/
                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh/*, mesh1*/);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#5-standard').on('click', function () {

            var sceneObj = isInSceneAndGet(5);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(5, 8);

            loader.load(path6, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 5;

                mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
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
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#5-dragon').on('click', function () {

            var sceneObj = isInSceneAndGet(5);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(5, 16);

            loader.load(path12, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 5;

                mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
                mesh.position.set(0, -1, -20.5);
                mesh.rotateY(3.3);
                mesh.rotateX(0);
                mesh.rotateZ(0);
                mesh.castShadow = true;

                /*mesh.material = new THREE.MeshLambertMaterial({color: 0x545554, transparent: true, opacity: 1});
                mesh.position.set(0.2, -1, -20.5);
                mesh.rotateY(0.5);
                mesh.rotateX(-0.25);
                mesh.rotateZ(0);
                mesh.castShadow = true;*/


                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#5-pig').on('click', function () {

            var sceneObj = isInSceneAndGet(5);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(5, 24);

            loader.load(path18, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 5;

                mesh.material = new THREE.MeshLambertMaterial({color: 0xFFB0BB, transparent: true, opacity: 1});
                mesh.position.set(0, -1.2, -20.4);
                mesh.rotateY(2);
                mesh.rotateX(-1);
                mesh.rotateZ(4);


                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#6-standard').on('click', function () {

            var sceneObj = isInSceneAndGet(6);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }

            addToCart(6, 1);

            /*loader.load( path10, function ( gltf ) {
                console.log(gltf);
                /!*var material = new THREE.MeshNormalMaterial();*!/
                var mesh = gltf.scene.children[0];
                var mesh1 = gltf.scene.children[1];

                mesh.material = new THREE.MeshLambertMaterial({color: 0x151515, transparent: true, opacity: 1});
                mesh.position.set(-0.2, -1.9, -19.7);
                mesh.rotateY(0.1);
                mesh.rotateX(-0.1);
                mesh.rotateZ(1.5);
                mesh.castShadow = true;

                mesh1.material = new THREE.MeshLambertMaterial({color: 0x151515, transparent: true, opacity: 1});
                mesh1.position.set(0.5, -1.9, -20);
                mesh1.rotateY(0);
                mesh1.rotateX(0);
                mesh1.rotateZ(1.5);
                mesh1.castShadow = true;

                /!*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            *!/
                scene.add( mesh, mesh1 );
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

            } );
*/
        });

        $('#6-black').on('click', function () {

            var sceneObj = isInSceneAndGet(6);
            console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }


            addToCart(6, 1);

            loader.load(path10, function (gltf) {
                console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 6;

                mesh.material = new THREE.MeshLambertMaterial({color: 0x151515, transparent: true, opacity: 1});
                mesh.position.set(-0.67, -1.705, -19.75);
                mesh.rotateY(-0.53);
                mesh.rotateX(-1.1);
                mesh.rotateZ(1.4);

                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#6-special').on('click', function () {

            var sceneObj = isInSceneAndGet(6);
            //console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }


            addToCart(6, 17);

            loader.load(path10, function (gltf) {
                //console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 6;

                mesh.material = new THREE.MeshNormalMaterial //r_shoe
                mesh.position.set(-0.67, -1.705, -19.75);
                mesh.rotateY(-0.53);
                mesh.rotateX(-1.1);
                mesh.rotateZ(1.4);
                /*mesh.position.z = -40;*/

                /*  var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
                  scene.add( vnh );
  */
                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/

                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });

        $('#6-spikes').on('click', function () {

            var sceneObj = isInSceneAndGet(6);
            //console.log(sceneObj);
            if (sceneObj) {
                scene.remove(sceneObj)
            }


            addToCart(6, 22);

            loader.load(path16, function (gltf) {
                //console.log(gltf);
                /*var material = new THREE.MeshNormalMaterial();*/
                var mesh = gltf.scene.children[0];
                mesh.name = 6;
                /*var mesh1 = gltf.scene.children[1];*/

                mesh.material = new THREE.MeshPhongMaterial({color: 0x151515, transparent: true, opacity: 1}); //r_shoe
                mesh.position.set(0.05, -1.705, -19.63);
                mesh.rotateY(-0.53);
                mesh.rotateX(-1.15);
                mesh.rotateZ(1.41);
                mesh.castShadow = true;

                /*mesh1.material = new THREE.MeshPhongMaterial({color: 0x151515, transparent: true, opacity: 1}); //l_shoes
                mesh1.position.set(0.1, -1.76, -19.8);
                mesh1.rotateY(-0.5);
                mesh1.rotateX(-1);
                mesh1.rotateZ(1.5);
                mesh1.castShadow = true;*/
                /*mesh.position.z = -40;*/

                /*  var vnh = new THREE.VertexNormalsHelper( mesh, 15 );
                  scene.add( vnh );
  */
                /*gltf.scene.traverse( function ( child ) {

                    if ( child.isMesh ) {

                        child.material.envMap = background;

                    }

                } );
            */
                scene.add(mesh);
                /*scene.add( material );*/


                requestAnimationFrame(render);

                /*function render(){
                    mesh.rotation.x += 0.00;
                    mesh.rotation.y += 0.01;
                    renderer.render(scene, camera);
                    requestAnimationFrame(render);
                }*/

            }, undefined, function (e) {

                console.error(e);

            });

        });




        $('#animate').on('click', function () {

            var delta = 0;

            delta += 0.01;

            /*var beta = 0;*/

            var light2 = new THREE.PointLight(0xffffff, 0.5);

            light2.position.z = -100;
            light2.target = mesh;
            scene.add(light2);

            if(delta >= 0){
                render();


                function render() {

                    /*delta -= 0.08;*/

                    delta -= 0.08;

                    camera.lookAt(mesh.position);
                    /*camera.position.y = Math.sin(delta) * 8;*/
                    camera.position.x = Math.sin(delta) * 9;
                    /*camera.position.z = Math.cos(beta) * 10;*/

                    renderer.render(scene, camera);

                    requestAnimationFrame(render);
                }

                renderer.render(scene, camera);

                console.log(delta);

            }else{

                console.log('hallo');

                function render() {

                    delta += 0.1;

                    camera.lookAt(mesh.position);
                    /*camera.position.y = 15;*/
                    camera.position.x = Math.sin(delta) * 50;
                    camera.position.z = Math.cos(delta) * 50;

                    renderer.render(scene, camera);

                    requestAnimationFrame(render);
                }

                renderer.render(scene, camera);



            }


           /* function animate() {


                var light2 = new THREE.PointLight(0xffffff, 0.5);

                light2.position.z = -100;
                light2.target = mesh;
                scene.add(light2);



                camera.lookAt(mesh.position);

                camera.position.z = 2;
                camera.position.x = 50;


                requestAnimationFrame( animate );
                renderer.render( scene, camera );
            }
            animate();*/

        });

        var categoryStates = {
            1: {},
            2: {},
            3: {},
            4: {},
            5: {},
            6: {},
        };
        document.querySelectorAll("[data-brick_id]").forEach(function (brick){
            if(brick.getAttribute("id").indexOf("standard") !== -1) {
                categoryStates[brick.dataset.content]["id"] = brick.dataset.brick_id
                categoryStates[brick.dataset.content]["name"] = brick.getAttribute("id").split("-")[1]
            }
            console.log(categoryStates);
            brick.addEventListener("click", function(ev) {

                var contentId = ev.target.dataset.content
                ev.target.classList.add("selected")

                console.log(document.querySelector("[data-brick_id='" + categoryStates[ev.target.dataset.content]["id"] + "']"));

                if(document.querySelector("[data-brick_id='" + categoryStates[ev.target.dataset.content]["id"] + "']")) {
                    document.querySelector("[data-brick_id='"+ categoryStates[ev.target.dataset.content]["id"] +"']").classList.remove("selected")
                }

                categoryStates[contentId].id = ev.target.dataset.brick_id
                categoryStates[contentId].name = ev.target.getAttribute("id").split("-")[1]

                console.log(categoryStates)
                /*if(previousSelected && previousSelected.dataset.content == ev.target.dataset.content) {
                    document.querySelector("[data-brick_id].selected[data-content='"+ ev.target.dataset.content +"']").classList.remove("selected")
                }
                ev.target.classList.add("selected")*/

            })
        })

        document.querySelector("#cart-form").addEventListener("submit", function (ev) {
            console.log(categoryStates);
            document.querySelector("input#cart_res").value = JSON.stringify(categoryStates)
        })

    });
})(jQuery);

