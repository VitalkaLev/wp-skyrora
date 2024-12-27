WebP Express 0.19.1. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-05-31 12:00:37

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited
Destination folder does not exist. Creating folder: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/banner-home.png
- destination: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\banner-home.png.webp
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
- source: [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/banner-home.png
- destination: E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\banner-home.png.webp
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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -m 6 -low_memory "[doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/banner-home.png" -o "E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\banner-home.png.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\banner-home.png.webp.lossy.webp'
File:      [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/banner-home.png
Dimension: 1901 x 725
Output:    44854 bytes Y-U-V-All-PSNR 47.99 51.53 52.31   48.95 dB
           (0.26 bpp)
block count:  intra4:       2680  (48.96%)
              intra16:      2794  (51.04%)
              skipped:      1030  (18.82%)
bytes used:  header:            325  (0.7%)
             mode-partition:  12465  (27.8%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   18375 |    1809 |    1862 |    1194 |   23240  (51.8%)
 intra16-coeffs:  |     314 |     177 |     391 |    2577 |    3459  (7.7%)
  chroma coeffs:  |    1997 |     585 |     739 |    2015 |    5336  (11.9%)
    macroblocks:  |      22%|       7%|       9%|      62%|    5474
      quantizer:  |      20 |      18 |      14 |      10 |
   filter level:  |      13 |      12 |      10 |      13 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   20686 |    2571 |    2992 |    5786 |   32035  (71.4%)

Success
Reduction: 97% (went from 1367 kb to 44 kb)

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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 85 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "[doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/banner-home.png" -o "E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\banner-home.png.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora\wp-content\webp-express/webp-images/themes/swipeks-theme\template-components\preview\images\banner-home.png.webp.lossless.webp'
File:      [doc-root]/wp-content/themes/swipeks-theme/template-components/preview/images/banner-home.png
Dimension: 1901 x 725
Output:    457286 bytes (2.65 bpp)
Lossless-ARGB compressed size: 457286 bytes
  * Header size: 7367 bytes, image data size: 449893
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: 67% (went from 1367 kb to 447 kb)

Picking lossy
cwebp succeeded :)

Converted image in 9561 ms, reducing file size with 97% (went from 1367 kb to 44 kb)
