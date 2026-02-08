<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Xinji')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Inter:wght@200;300;400;500;600&family=JetBrains+Mono:wght@300;400;500&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <!-- CSS -->
    @if(config('app.env') === 'local' && file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @endif
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
                        display: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        canvas: '#FAFAFA',
                        surface: '#FFFFFF',
                        obsidian: '#111111',
                        charcoal: '#333333',
                        subtle: '#737373',
                        border: '#E5E5E5',
                        accent: '#252525',
                        primary: '#000000',
                    },
                    letterSpacing: {
                        tight: '-0.02em',
                        tighter: '-0.04em',
                    }
                }
            }
        }
    </script>
</head>
<body class="w-full relative bg-canvas">
    <!-- Fixed Backgrounds -->
    <div class="fixed inset-0 z-0 technical-grid pointer-events-none"></div>
    <div id="canvas-container" class="fixed inset-0 z-0 opacity-100"></div>

    <!-- Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 w-full px-6 py-5 md:px-12 flex justify-between items-center bg-canvas/90 backdrop-blur-md border-b border-border/50 transition-all duration-300">
        <a href="{{ route('main') }}" class="flex items-center hover:opacity-80 transition-opacity">
            <img src="{{ asset('images/logo/xinji-logo.png') }}" alt="XINJI TECH" class="h-10 md:h-12 w-auto">
        </a>

        <nav class="hidden md:flex items-center gap-8 absolute left-1/2 transform -translate-x-1/2">
            <a href="{{ route('main') }}" class="font-sans text-sm font-medium text-subtle hover:text-obsidian transition-colors {{ request()->routeIs('main') ? 'text-obsidian' : '' }}">Main</a>
            <a href="{{ route('about-us') }}" class="font-sans text-sm font-medium text-subtle hover:text-obsidian transition-colors {{ request()->routeIs('about-us') ? 'text-obsidian' : '' }}">About us</a>
            <a href="{{ route('technologies') }}" class="font-sans text-sm font-medium text-subtle hover:text-obsidian transition-colors {{ request()->routeIs('technologies') ? 'text-obsidian' : '' }}">Technologies</a>
            <a href="{{ route('developments') }}" class="font-sans text-sm font-medium text-subtle hover:text-obsidian transition-colors {{ request()->routeIs('developments') ? 'text-obsidian' : '' }}">Developments</a>
            <a href="{{ route('news') }}" class="font-sans text-sm font-medium text-subtle hover:text-obsidian transition-colors {{ request()->routeIs('news') ? 'text-obsidian' : '' }}">News</a>
            <a href="{{ route('contacts') }}" class="font-sans text-sm font-medium text-subtle hover:text-obsidian transition-colors {{ request()->routeIs('contacts') ? 'text-obsidian' : '' }}">Contacts</a>
        </nav>

        <div class="w-32"></div>
    </header>

    <!-- Content Wrapper -->
    <div class="z-10 flex flex-col w-full relative">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-border/60 py-16 md:py-20 px-6 md:px-12 lg:px-20 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16 mb-12">
                <!-- Left Section: Logo and Company Info -->
                <div class="space-y-5">
                    <!-- Logo -->
                    <div class="mb-4">
                        <img src="{{ asset('images/logo/xinji-logo.png') }}" alt="XINJI TECH" class="h-10 w-auto">
                    </div>
                    <div>
                        <p class="font-sans text-xs text-subtle leading-relaxed mb-8">
                            Technologies, design, solutions.
                        </p>
                        <p class="font-sans text-xs text-subtle">
                            © 2023 XINJI TECHNOLOGIES
                        </p>
                    </div>
                </div>

                <!-- Navigation Section -->
                <div class="space-y-5">
                    <h4 class="font-sans text-xs font-bold text-obsidian tracking-tight">Important</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('main') }}" class="font-sans text-xs text-obsidian hover:text-charcoal transition-colors inline-block">
                                Main
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('technologies') }}" class="font-sans text-xs text-obsidian hover:text-charcoal transition-colors inline-block">
                                Technologies
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('developments') }}" class="font-sans text-xs text-obsidian hover:text-charcoal transition-colors inline-block">
                                Developments
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contacts') }}" class="font-sans text-xs text-obsidian hover:text-charcoal transition-colors inline-block">
                                Contacts
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Information Section -->
                <div class="space-y-5">
                    <div>
                        <h4 class="font-sans text-xs font-bold text-obsidian tracking-tight mb-3">Email</h4>
                        <a href="mailto:info@xinji-tech.com" class="font-sans text-xs text-obsidian hover:text-charcoal transition-colors inline-block">
                            info@xinji-tech.com
                        </a>
                    </div>
                    <div>
                        <h4 class="font-sans text-xs font-bold text-obsidian tracking-tight mb-3">Phone</h4>
                        <a href="tel:+85258010458" class="font-sans text-xs text-obsidian hover:text-charcoal transition-colors inline-block">
                            +852 58010458
                        </a>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="space-y-5">
                    <h4 class="font-sans text-xs font-bold text-obsidian tracking-tight">Contacts</h4>
                    <div class="font-sans text-xs text-obsidian leading-relaxed space-y-1">
                        <p>XINJI TECHNOLOGIES (HK) CO.,</p>
                        <p>LIMITED</p>
                        <p>RM4, 16/F HO KING COMM CTR 2-16</p>
                        <p>FAYUEN ST MONGKOK KL HONG</p>
                        <p>KONG</p>
                    </div>
                </div>
            </div>

            <!-- Legal Links at Bottom -->
            <div class="pt-8 border-t border-border/60 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="font-sans text-xs text-subtle order-2 sm:order-1">
                    All rights reserved.
                </p>
                <div class="flex gap-6 order-1 sm:order-2">
                    <a href="#" class="font-sans text-xs text-obsidian hover:text-charcoal transition-colors">
                        PRIVACY POLICY
                    </a>
                    <a href="#" class="font-sans text-xs text-obsidian hover:text-charcoal transition-colors">
                        TERMS OF SERVICE
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Shaders for Three.js -->
    <script type="x-shader/x-vertex" id="vertexShader">
      uniform float uTime;
      uniform float uDistortion;
      uniform float uSize;
      uniform vec2 uMouse;
      varying float vNoise;

      vec3 mod289(vec3 x) { return x - floor(x * (1.0 / 289.0)) * 289.0; }
      vec4 mod289(vec4 x) { return x - floor(x * (1.0 / 289.0)) * 289.0; }
      vec4 permute(vec4 x) { return mod289(((x*34.0)+1.0)*x); }
      vec4 taylorInvSqrt(vec4 r) { return 1.79284291400159 - 0.85373472095314 * r; }

      float snoise(vec3 v) {
          const vec2  C = vec2(1.0/6.0, 1.0/3.0) ;
          const vec4  D = vec4(0.0, 0.5, 1.0, 2.0);
          vec3 i  = floor(v + dot(v, C.yyy) );
          vec3 x0 = v - i + dot(i, C.xxx) ;
          vec3 g = step(x0.yzx, x0.xyz);
          vec3 l = 1.0 - g;
          vec3 i1 = min( g.xyz, l.zxy );
          vec3 i2 = max( g.xyz, l.zxy );
          vec3 x1 = x0 - i1 + 1.0 * C.xxx;
          vec3 x2 = x0 - i2 + 2.0 * C.xxx;
          vec3 x3 = x0 - 1.0 + 3.0 * C.xxx;
          i = mod289(i);
          vec4 p = permute( permute( permute(
                      i.z + vec4(0.0, i1.z, i2.z, 1.0 ))
                  + i.y + vec4(0.0, i1.y, i2.y, 1.0 ))
                  + i.x + vec4(0.0, i1.x, i2.x, 1.0 ));
          float n_ = 1.0/7.0;
          vec3  ns = n_ * D.wyz - D.xzx;
          vec4 j = p - 49.0 * floor(p * ns.z *ns.z);
          vec4 x_ = floor(j * ns.z);
          vec4 y_ = floor(j - 7.0 * x_ );
          vec4 x = x_ *ns.x + ns.yyyy;
          vec4 y = y_ *ns.x + ns.yyyy;
          vec4 h = 1.0 - abs(x) - abs(y);
          vec4 b0 = vec4( x.xy, y.xy );
          vec4 b1 = vec4( x.zw, y.zw );
          vec4 s0 = floor(b0)*2.0 + 1.0;
          vec4 s1 = floor(b1)*2.0 + 1.0;
          vec4 sh = -step(h, vec4(0.0));
          vec4 a0 = b0.xzyw + s0.xzyw*sh.xxyy ;
          vec4 a1 = b1.xzyw + s1.xzyw*sh.zzww ;
          vec3 p0 = vec3(a0.xy,h.x);
          vec3 p1 = vec3(a0.zw,h.y);
          vec3 p2 = vec3(a1.xy,h.z);
          vec3 p3 = vec3(a1.zw,h.w);
          vec4 norm = taylorInvSqrt(vec4(dot(p0,p0), dot(p1,p1), dot(p2, p2), dot(p3,p3)));
          p0 *= norm.x; p1 *= norm.y; p2 *= norm.z; p3 *= norm.w;
          vec4 m = max(0.6 - vec4(dot(x0,x0), dot(x1,x1), dot(x2,x2), dot(x3,x3)), 0.0);
          m = m * m;
          return 42.0 * dot( m*m, vec4( dot(p0,x0), dot(p1,x1), dot(p2,x2), dot(p3,x3) ) );
      }

      void main() {
          vec3 pos = position;
          float noise = snoise(vec3(pos.x * 0.5 + uTime * 0.15, pos.y * 0.5, pos.z * 0.5));
          vNoise = noise;
          vec3 newPos = pos + (normal * noise * uDistortion);
          float dist = distance(uMouse * 10.0, newPos.xy);
          float interaction = smoothstep(6.0, 0.0, dist);
          newPos.z += interaction * 1.5;
          vec4 mvPosition = modelViewMatrix * vec4(newPos, 1.0);
          gl_Position = projectionMatrix * mvPosition;
          gl_PointSize = uSize * (20.0 / -mvPosition.z);
      }
    </script>

    <script type="x-shader/x-fragment" id="fragmentShader">
      uniform vec3 uColor;
      varying float vNoise;
      void main() {
          vec2 center = gl_PointCoord - vec2(0.5);
          float dist = length(center);
          if (dist > 0.45) discard;
          float alpha = 1.0;
          vec3 color1 = uColor;
          vec3 color2 = vec3(0.25, 0.35, 0.45);
          vec3 finalColor = mix(color1, color2, vNoise * 0.5 + 0.5);
          gl_FragColor = vec4(finalColor, alpha);
      }
    </script>

    <script>
        // Lucide Icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Three.js Background Animation
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('canvas-container');
            if (!container || typeof THREE === 'undefined') return;

            const scene = new THREE.Scene();
            scene.fog = new THREE.FogExp2(0xF5F5F7, 0.04);

            const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 100);
            camera.position.set(0, 0, 20);

            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            container.appendChild(renderer.domElement);

            const objectGroup = new THREE.Group();
            scene.add(objectGroup);

            const geometry = new THREE.BoxGeometry(9, 9, 9, 40, 40, 40);
            const uniforms = {
                uTime: { value: 0 },
                uDistortion: { value: 0.0 },
                uSize: { value: 1.8 },
                uColor: { value: new THREE.Color('#0F172A') },
                uMouse: { value: new THREE.Vector2(0, 0) }
            };

            const material = new THREE.ShaderMaterial({
                vertexShader: document.getElementById('vertexShader').textContent,
                fragmentShader: document.getElementById('fragmentShader').textContent,
                uniforms: uniforms,
                transparent: true,
                blending: THREE.NormalBlending
            });

            const points = new THREE.Points(geometry, material);
            objectGroup.add(points);

            let time = 0;
            let mouseX = 0, mouseY = 0;

            document.addEventListener('mousemove', (e) => {
                mouseX = (e.clientX / window.innerWidth) * 2 - 1;
                mouseY = -(e.clientY / window.innerHeight) * 2 + 1;
                uniforms.uMouse.value.x += (mouseX - uniforms.uMouse.value.x) * 0.03;
                uniforms.uMouse.value.y += (mouseY - uniforms.uMouse.value.y) * 0.03;
            });

            function adjustLayout() {
                const w = window.innerWidth;
                if(w < 1024) {
                    objectGroup.position.set(4, 5, -8);
                    objectGroup.scale.set(0.65, 0.65, 0.65);
                } else {
                    objectGroup.position.set(0, 2.5, 0);
                    objectGroup.scale.set(0.65, 0.65, 0.65);
                }
            }

            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
                adjustLayout();
            });
            adjustLayout();

            window.addEventListener('scroll', () => {
                const scrollY = window.scrollY;
                objectGroup.rotation.z = scrollY * 0.0005;
                const w = window.innerWidth;
                const baseY = w < 1024 ? 5 : 2.5;
                objectGroup.position.y = baseY + scrollY * 0.005;

                const header = document.querySelector('header');
                if(header) {
                    if(scrollY > 50) {
                        header.classList.add('shadow-sm');
                        header.classList.replace('bg-canvas/90', 'bg-white/90');
                    } else {
                        header.classList.remove('shadow-sm');
                        header.classList.replace('bg-white/90', 'bg-canvas/90');
                    }
                }
            });

            function animate() {
                requestAnimationFrame(animate);
                time += 0.008;
                objectGroup.rotation.y = time * 0.2;
                uniforms.uTime.value = time;
                camera.position.x += (mouseX * 0.5 - camera.position.x) * 0.02;
                camera.position.y += (mouseY * 0.5 - camera.position.y) * 0.02;
                camera.lookAt(0,0,0);
                renderer.render(scene, camera);
            }
            animate();
        });

        // Pricing Cards Interaction
        document.addEventListener('DOMContentLoaded', () => {
            const cards = ['pricing-hobby', 'pricing-pro', 'pricing-ent'];
            function updateState(selectedId) {
                cards.forEach(id => {
                    const card = document.getElementById(id);
                    if (!card) return;
                    const isSelected = id === selectedId;
                    if (isSelected) {
                        card.classList.add('scale-[1.02]', 'shadow-2xl', 'z-10', 'ring-1', 'ring-obsidian/5', 'opacity-100');
                        card.classList.remove('scale-[0.98]', 'opacity-60', 'hover:shadow-xl');
                        if (id !== 'pricing-pro') {
                            card.classList.add('border-obsidian');
                            card.classList.remove('border-border');
                        }
                    } else {
                        card.classList.remove('scale-[1.02]', 'shadow-2xl', 'z-10', 'border-obsidian', 'ring-1', 'ring-obsidian/5', 'opacity-100');
                        card.classList.add('border-border', 'opacity-60', 'scale-[0.98]');
                    }
                });
            }
            cards.forEach(id => {
                const card = document.getElementById(id);
                if (card) {
                    card.addEventListener('click', () => updateState(id));
                    card.addEventListener('keydown', (e) => {
                        if (e.key === 'Enter' || e.key === ' ') {
                            e.preventDefault();
                            updateState(id);
                        }
                    });
                    card.addEventListener('mouseenter', () => {
                        if (card.classList.contains('opacity-60')) {
                            card.classList.remove('opacity-60');
                            card.classList.add('opacity-90');
                        }
                    });
                    card.addEventListener('mouseleave', () => {
                        const isSelected = card.classList.contains('z-10');
                        if (!isSelected) {
                            card.classList.remove('opacity-90');
                            card.classList.add('opacity-60');
                        }
                    });
                }
            });
            updateState('pricing-pro');
        });
    </script>
    @yield('scripts')
</body>
</html>

