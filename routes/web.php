<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/technologies', function () {
    return view('technologies');
})->name('technologies');

Route::get('/developments', function () {
    return view('developments');
})->name('developments');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/news/{slug}', function ($slug) {
    $articles = [
        'stm32f4discovery' => [
            'title' => 'The STM32F4DISCOVERY Discovery',
            'date' => 'July 9, 2023',
            'image' => 'IM1.png',
            'content' => '<p>The STM32F4DISCOVERY Discovery kit leverages the capabilities of the STM32F407 high-performance microcontrollers, to allow users to develop audio applications easily. It includes an ST-LINK/V2-A embedded debug tool, one ST-MEMS digital accelerometer, one digital microphone, one audio DAC with integrated class D speaker driver, LEDs, push-buttons, and a USB OTG Micro-AB connector.</p>',
            'features' => [
                'STM32F407VGT6 microcontroller featuring 32-bit Arm® Cortex®-M4 with FPU core, 1-Mbyte Flash memory and 192-Kbyte RAM in an LQFP100 package',
                'USB OTG FS',
                'ST MEMS 3-axis accelerometer',
                'ST-MEMS audio sensor omni-directional digital microphone',
                'Audio DAC with integrated class D speaker driver',
                'User and reset push-buttons',
                'Eight LEDs: LD1 (red/green) for USB communication, LD2 (red) for 3.3 V power on, Four user LEDs, LD3 (orange), LD4 (green), LD5 (red) and LD6 (blue), Two USB OTG LEDs, LD7 (green) VBUS and LD8 (red) over-current',
                'Board connectors: USB with Micro-AB, Stereo headphone output jack, 2.54 mm pitch extension header for all LQFP100 I/Os for quick connection to prototyping board and easy probing',
                'Flexible power-supply options: ST-LINK, USB VBUS, or external sources',
                'External application power supply: 3 V and 5 V',
                'Comprehensive free software including a variety of examples, part of STM32CubeF4 MCU Package, or STSW-STM32068 for using legacy standard libraries',
                'On-board ST-LINK/V2-A debugger/programmer with USB re-enumeration capability: mass storage, Virtual COM port, and debug port',
                'Support of a wide choice of Integrated Development Environments (IDEs) including IAR Embedded Workbench®, MDK-ARM, and STM32CubeIDE'
            ],
            'applications' => [
                'Analog and digital sensors in mixed-signal edge nodes and single-chip applications',
                'Lighting',
                'Motor control',
                'Medical',
                'Home automation',
                'Automotive',
                'Internet of Things (IoT)'
            ],
            'previous' => null,
            'next' => 'pic18-q71'
        ],
        'pic18-q71' => [
            'title' => 'Microchip Technology PIC18-Q71 28/40/44/48-Pin Microcontrollers',
            'date' => 'April 18, 2017',
            'image' => 'IM2.png',
            'content' => '<p>Microchip Technology PIC18-Q71 28/40/44/48-Pin Microcontrollers are designed for high bandwidth mixed-signal and sensor applications. The PIC18-Q71 MCUs are an ideal solution for lighting, motor control, and medical market segments.</p><p>The analog-focused Microchip PIC18-Q71 MCUs incorporate a 12-bit differential ADC with computation and context switching, two operational amplifiers, a 10-bit Digital-to-Analog Converter (DAC), and two 8-bit DAC modules with buffered outputs and internal connections to other peripherals, and two advanced high-speed analog comparators. Additionally, the devices feature the Analog Peripheral Manager to manage analog peripherals for optimizing power consumption.</p><p>The PIC18-Q71 microcontrollers offer the 8-bit virtual port module to interconnect digital peripherals without utilizing external pins.</p>',
            'features' => [
                'C Compiler-optimized RISC architecture',
                '128-level deep hardware stack',
                'Four Direct Memory Access (DMA) controllers: Data transfers to SFR/GPR spaces from either the Program Flash Memory, Data EEPROM, or SFR/GPR spaces, User-programmable source and destination sizes, Hardware and software-triggered data transfers',
                'Vectored interrupt capability: Selectable high/low priority, Fixed interrupt latency of three instruction cycles, Programmable vector table base address, Backward compatible with previous interrupt capabilities',
                'Operating speed: DC to 64MHz clock input, 62.5ns minimum instruction cycle',
                'Low-current Power-on Reset (POR)',
                'Configurable Power-up Timer (PWRT)',
                'Brown-out Reset (BOR)',
                'Low-Power BOR (LPBOR) option',
                'Windowed Watchdog Timer (WWDT): Watchdog Reset on too long or too short intervals between watchdog clear events, Variable prescaler selection, Variable window size selection'
            ],
            'applications' => [
                'Analog and digital sensors in mixed-signal edge nodes and single-chip applications',
                'Lighting',
                'Motor control',
                'Medical',
                'Home automation',
                'Automotive',
                'Internet of Things (IoT)'
            ],
            'previous' => 'stm32f4discovery',
            'next' => 'sparkfun-mgm240p'
        ],
        'sparkfun-mgm240p' => [
            'title' => 'SparkFun MGM240P Thing Plus Matter Development Board',
            'date' => 'April 10, 2017',
            'image' => 'IM3.png',
            'content' => '<p>SparkFun MGM240P Thing Plus Matter Development Board is an easily accessible board that combines Matter and Qwiic ecosystem for agile development and prototyping Matter-based IoT devices. This board provides secure connectivity for 802.15.4 with mesh communication (Thread) and 5.3 Bluetooth® low energy protocols. The development boards are Feather-compatible and come with a Qwiic connector for easy integration into Qwiic Connect System for solderless I2C circuits.</p><p>This MGM240P board features LiPo battery connectors, multiple GPIO pins capable of complete multiplexing through software, and a MAX17048 fuel gauge to charge. Typical applications include smart home devices, lighting, gateways and digital assistants, building automation, and security.</p>',
            'features' => [
                'Thing plus form factor (Feather-compatible): 2.30inch x 0.9inch dimensions, 4-40 screw compatible two mounting holes',
                'Twenty-one GPIO PTH breakouts: All pins have complete multiplexing capability through software, SPI, I2C, and UART interfaces mapped by default to labeled pins, Thirteen GPIO (Six labeled as analog and seven labeled for GPIO) (All function as either GPIO or analog), Built-in-Digital to Analog Converter (DAC)',
                'USB-C™ connector and µSD card slot',
                '2-Pin JST LiPo battery connector for a LiPo battery (not included)',
                '4-Pin JST Qwiic connector',
                'Configurable charge rate (500mA default and 100mA alternate) for MC73831 single-cell LiPo charger',
                'MAX17048 single-cell LiPo fuel gauge',
                'Low power consumption (15µA when MGM240P is in low power mode)',
                'Reset Button: Physical push-button, Reset signal can be tied to A0 to enable use as a peripheral device',
                'MGM240P wireless module: Built around the EFR32MG24 wireless SoC, 32-bit Arm-M33 core processor at 39MHz, 1536kB flash memory, 256kB RAM, Supports multiple 802.15.4 wireless protocols (Zigbee® and OpenThread®), 5.3 BLUETOOTH® low energy, Matter-ready, Secure vault® support, Built-in antenna',
                'LEDs: PWR – Red power LED, CHG – Yellow battery charging status LED, STAT – Blue status LED'
            ],
            'applications' => [
                'Smart home devices',
                'Lighting',
                'Gateways and digital assistants',
                'Building automation and security'
            ],
            'previous' => 'pic18-q71',
            'next' => 'unitedsic-qorvo'
        ],
        'unitedsic-qorvo' => [
            'title' => 'UnitedSiC / Qorvo 750V UJ4C/SC SiC FETs in D2PAK-7L Package',
            'date' => 'April 7, 2017',
            'image' => 'IM4.png',
            'content' => '<p>Morbi turpis risus, vestibulum sed tempor eget, varius vitae leo. Aenean ornare tellus eget ipsum congue.</p><p>UnitedSiC / Qorvo 750V UJ4C/SC SiC FETs in D2PAK-7L Package are available in multiple on-resistance options from 9mΩ to 60mΩ. Leveraging a unique cascode SiC FET technology in which a normally-on SiC JFET is co-packaged with a Si MOSFET to produce a normally-off SiC FET, these devices deliver a best-in-class RDS x Area Figure of Merit, resulting in the lowest conduction losses in a small die. The D2PAK-7L package provides reduced inductance from compact internal connection loops, which, along with the included Kelvin source connection, results in low switching loss, enabling higher frequency operation and improved system power density. Five parallel gull-wing source connections allow low inductance and high current usage. The silver-sinter die-attach results in very low thermal resistance for maximum heat extraction on standard PCBs and IMS substrates with liquid cooling. These SiC FETs offer a low body diode, ultra-low gate charge, and a 4.8V threshold voltage that allows 0V to 15V drive. The standard gate-drive characteristics of the FETs make them ideal replacements for Si IGBTs, Si FETs, SiC MOSFETs, or Si super-junction devices.</p><p>The UnitedSiC / Qorvo 750V UJ4C/SC SiC FETs in D2PAK-7L package are ESD protected and are ideal for use in onboard chargers, soft-switched DC-DC converters, battery charging (Fast DC and industrial), and IT/Server power supplies.</p>',
            'features' => [
                '750V VDS rating',
                'Low RDS(on) from 9mΩ to 60mΩ',
                'Key Figures of Merit enable next-gen, high-performance power designs',
                'Best-in-class RDS(on)x Area',
                'Improves the Qrrand Eon/Eoff losses at a given RDS(on)',
                'Reduces both Coss(er)/Eossand Coss(tr)',
                'Excellent body diode performance (Vf<2V)',
                'Low gate charge',
                '175°C maximum operating temperature',
                'Excellent reverse recovery (Qrr)',
                '4.8VG(th)threshold voltage',
                'ESD protected, HBM class 2',
                'High 6.7mm creepage and 7.3mm clearance distance SMT',
                'Advanced Ag-sinter die attach for superior thermal performance',
                'D2PAK-7L package'
            ],
            'applications' => [
                'On-board chargers',
                'Soft-switched DC-DC converters',
                'Battery charging (Fast DC and industrial)',
                'IT/Server power supplies'
            ],
            'previous' => 'sparkfun-mgm240p',
            'next' => 'stm32c0116-dk'
        ],
        'stm32c0116-dk' => [
            'title' => 'STMicroelectronics STM32C0116-DK Discovery Kit',
            'date' => 'April 2, 2017',
            'image' => 'IM5.png',
            'content' => '<p>STMicroelectronics STM32C0116-DK Discovery Kit is designed to demonstrate the features of the STM32C0 MCUs in a UFQFPN20 package. The STM32C0116-DK Kit includes one UFQFPN20 to DIL20 module based on the STM32C011F6 microcontroller and enables the user to develop and share applications. The device incorporates an onboard ST-LINK/V2-1 to debug and program the embedded STM32 microcontroller.</p><p>The STM STM32C0116-DK Discovery Kit plugs into a PC through a standard USB Type-A or USB Type-C® to Micro-B cable for operation.</p>',
            'features' => [
                'STM32C011F6 Arm® Cortex®‑M0+ core-based microcontroller with 32Kbytes of Flash memory and 6Kbytes of RAM, in a UFQFPN20 package',
                'Individual STM32 UFQFPN20 to DIL20 module',
                'Board connectors: USB Micro-B, DIL20 socket, Dedicated LCD footprint, Grove (UART), 2x 10‑pin headers for MCU daughterboard, Extension connectors',
                'User LED',
                'Reset push-button',
                '5‑way joystick using a single ADC input pin',
                'On-board ST-LINK/V2-1 debugger/programmer with USB re-enumeration capability: mass storage and debug port',
                'Comprehensive free software libraries and examples available with the STM32Cube MCU package',
                'Support of a wide choice of Integrated Development Environments (IDEs), including IAR Embedded Workbench®, MDK-ARM, and STM32CubeIDE'
            ],
            'applications' => null,
            'required_equipment' => [
                'Multi‑OS support of Windows® 10, Linux® 64-bit, or macOS®',
                'USB Type-A or USB Type-C® to Micro-B cable'
            ],
            'previous' => 'unitedsic-qorvo',
            'next' => null
        ]
    ];

    if (!isset($articles[$slug])) {
        abort(404);
    }

    return view('news-article', [
        'article' => $articles[$slug], 
        'slug' => $slug,
        'articles' => $articles
    ]);
})->name('news.article');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts', [ContactController::class, 'send'])->name('contacts.send');

