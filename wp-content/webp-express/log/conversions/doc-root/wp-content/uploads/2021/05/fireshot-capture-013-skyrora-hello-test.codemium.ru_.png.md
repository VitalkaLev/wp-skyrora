WebP Express 0.19.1. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-05-31 23:49:54

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/05/fireshot-capture-013-skyrora-hello-test.codemium.ru_.png
- destination: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/uploads/2021\05\fireshot-capture-013-skyrora-hello-test.codemium.ru_.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/05/fireshot-capture-013-skyrora-hello-test.codemium.ru_.png
- destination: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/uploads/2021\05\fireshot-capture-013-skyrora-hello-test.codemium.ru_.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' is not recognized as an internal or external command,
operable program or batch file.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]/wp-content/uploads/2021/05/fireshot-capture-013-skyrora-hello-test.codemium.ru_.png" -o "E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/uploads/2021\05\fireshot-capture-013-skyrora-hello-test.codemium.ru_.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/uploads/2021\05\fireshot-capture-013-skyrora-hello-test.codemium.ru_.png.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2021/05/fireshot-capture-013-skyrora-hello-test.codemium.ru_.png
Dimension: 1903 x 3739
Output:    404458 bytes Y-U-V-All-PSNR 46.56 48.01 48.38   47.03 dB
           (0.45 bpp)
block count:  intra4:       6345  (22.79%)
              intra16:     21501  (77.21%)
              skipped:     20690  (74.30%)
bytes used:  header:            686  (0.2%)
             mode-partition:  43299  (10.7%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |  273799 |     635 |     382 |     135 |  274951  (68.0%)
 intra16-coeffs:  |    4979 |     549 |     344 |     154 |    6026  (1.5%)
  chroma coeffs:  |   78389 |     268 |     363 |     447 |   79467  (19.6%)
    macroblocks:  |      25%|       1%|       0%|      74%|   27846
      quantizer:  |      20 |      18 |      14 |      11 |
   filter level:  |      13 |      12 |      16 |      14 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |  357167 |    1452 |    1089 |     736 |  360444  (89.1%)

Success
Reduction: 79% (went from 1896 kb to 395 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
'cwebp' is not recognized as an internal or external command,
operable program or batch file.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -version 2>&1. Result: version: *1.1.0*
Binaries ordered by version number.
- E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/wp-content/uploads/2021/05/fireshot-capture-013-skyrora-hello-test.codemium.ru_.png" -o "E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/uploads/2021\05\fireshot-capture-013-skyrora-hello-test.codemium.ru_.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/uploads/2021\05\fireshot-capture-013-skyrora-hello-test.codemium.ru_.png.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2021/05/fireshot-capture-013-skyrora-hello-test.codemium.ru_.png
Dimension: 1903 x 3739
Output:    810882 bytes (0.91 bpp)
Lossless-ARGB compressed size: 810882 bytes
  * Header size: 13327 bytes, image data size: 797530
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=6 transform=4 cache=10

Success
Reduction: 58% (went from 1896 kb to 792 kb)

Picking lossy
cwebp succeeded :)

Converted image in 11018 ms, reducing file size with 79% (went from 1896 kb to 395 kb)
