WebP Express 0.19.1. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-05-31 12:47:09

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/Home/list-posts.png
- destination: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\Home\list-posts.png.webp
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
- source: [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/Home/list-posts.png
- destination: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\Home\list-posts.png.webp
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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/Home/list-posts.png" -o "E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\Home\list-posts.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\Home\list-posts.png.webp.lossy.webp'
File:      [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/Home/list-posts.png
Dimension: 1896 x 805
Output:    85682 bytes Y-U-V-All-PSNR 45.46 48.06 48.85   46.24 dB
           (0.45 bpp)
block count:  intra4:       1909  (31.45%)
              intra16:      4160  (68.55%)
              skipped:      3712  (61.16%)
bytes used:  header:            482  (0.6%)
             mode-partition:  12240  (14.3%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   56115 |     961 |     925 |     332 |   58333  (68.1%)
 intra16-coeffs:  |     711 |     227 |     291 |     305 |    1534  (1.8%)
  chroma coeffs:  |   11963 |     273 |     351 |     479 |   13066  (15.2%)
    macroblocks:  |      32%|       2%|       3%|      63%|    6069
      quantizer:  |      20 |      18 |      14 |      10 |
   filter level:  |      32 |      21 |      13 |      13 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   68789 |    1461 |    1567 |    1116 |   72933  (85.1%)

Success
Reduction: 92% (went from 1108 kb to 84 kb)

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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/Home/list-posts.png" -o "E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\Home\list-posts.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\Home\list-posts.png.webp.lossless.webp'
File:      [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/Home/list-posts.png
Dimension: 1896 x 805
Output:    391316 bytes (2.05 bpp)
Lossless-ARGB compressed size: 391316 bytes
  * Header size: 5919 bytes, image data size: 385372
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: 66% (went from 1108 kb to 382 kb)

Picking lossy
cwebp succeeded :)

Converted image in 5006 ms, reducing file size with 92% (went from 1108 kb to 84 kb)
