WebP Express 0.19.1. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-06-01 11:51:31

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/all/TECHNOLOGIES.jpg
- destination: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\all\TECHNOLOGIES.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/all/TECHNOLOGIES.jpg
- destination: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\all\TECHNOLOGIES.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
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
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "[doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/all/TECHNOLOGIES.jpg" -o "E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\all\TECHNOLOGIES.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\all\TECHNOLOGIES.jpg.webp.lossy.webp'
File:      [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/all/TECHNOLOGIES.jpg
Dimension: 840 x 400
Output:    8772 bytes Y-U-V-All-PSNR 44.11 48.72 50.67   45.30 dB
           (0.21 bpp)
block count:  intra4:        165  (12.45%)
              intra16:      1160  (87.55%)
              skipped:      1093  (82.49%)
bytes used:  header:            224  (2.6%)
             mode-partition:   1458  (16.6%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    6325 |      14 |       0 |       0 |    6339  (72.3%)
 intra16-coeffs:  |      20 |       2 |       0 |       4 |      26  (0.3%)
  chroma coeffs:  |     674 |       6 |       0 |      15 |     695  (7.9%)
    macroblocks:  |      21%|       8%|       0%|      71%|    1325
      quantizer:  |      39 |      39 |      29 |      22 |
   filter level:  |      11 |      41 |       5 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    7019 |      22 |       0 |      19 |    7060  (80.5%)

Success
Reduction: 88% (went from 70 kb to 9 kb)

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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/all/TECHNOLOGIES.jpg" -o "E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\all\TECHNOLOGIES.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\all\TECHNOLOGIES.jpg.webp.lossless.webp'
File:      [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/all/TECHNOLOGIES.jpg
Dimension: 840 x 400
Output:    27588 bytes (0.66 bpp)
Lossless-ARGB compressed size: 27588 bytes
  * Header size: 1243 bytes, image data size: 26320
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: 62% (went from 70 kb to 27 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1512 ms, reducing file size with 88% (went from 70 kb to 9 kb)
