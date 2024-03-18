import * as THREE from 'https://unpkg.com/three/build/three.module.js';
console.log('ça y est, nous y est .' + THREE.REVISION);
// import { GLTFLoader } from '/node_modules/three/examples/jsm/loaders/GLTFLoader.js';


const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ antialias: true });
// const loader = new GLTFLoader();
const ambient = new THREE.AmbientLight(0xffffff, 4);
const controls = new THREE.OrbitControls(camera, renderer.domElement);


renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

scene.add(ambient)

scene.background = new THREE.Color( 0x000033 );

// // Load your 3D file
// loader.load(
//     'exposol.glb',
//     function (gltf) {
//       scene.add(gltf.scene);
//     },
//     undefined,
//     function (error) {
//       console.error(error);
//     }
//   );

function animate() {
    camera.position.set(0, 0, 10);
    // camera.lookAt(scene.position);
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}
animate();


