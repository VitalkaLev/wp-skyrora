WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-31 09:29:50

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/04/innovation-section-150x150.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\04\innovation-section-150x150.jpg.webp
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
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/04/innovation-section-150x150.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\04\innovation-section-150x150.jpg.webp
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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/04/innovation-section-150x150.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\04\innovation-section-150x150.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\04\innovation-section-150x150.jpg.webp.lossy.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/04/innovation-section-150x150.jpg
Dimension: 150 x 150
Output:    2716 bytes Y-U-V-All-PSNR 38.62 41.36 40.89   39.30 dB
           (0.97 bpp)
block count:  intra4:         76  (76.00%)
              intra16:        24  (24.00%)
              skipped:        13  (13.00%)
bytes used:  header:             70  (2.6%)
             mode-partition:    350  (12.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1659 |       7 |       0 |       0 |    1666  (61.3%)
 intra16-coeffs:  |     138 |       0 |       0 |       0 |     138  (5.1%)
  chroma coeffs:  |     460 |       1 |       0 |       0 |     461  (17.0%)
    macroblocks:  |      86%|       1%|       2%|      11%|     100
      quantizer:  |      31 |      23 |      16 |      16 |
   filter level:  |      13 |       5 |       3 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    2257 |       8 |       0 |       0 |    2265  (83.4%)

Success
Reduction: 57% (went from 6385 bytes to 2716 bytes)

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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/04/innovation-section-150x150.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\04\innovation-section-150x150.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\04\innovation-section-150x150.jpg.webp.lossless.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/04/innovation-section-150x150.jpg
Dimension: 150 x 150
Output:    14882 bytes (5.29 bpp)
Lossless-ARGB compressed size: 14882 bytes
  * Header size: 1126 bytes, image data size: 13730
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=2 cache=0

Success
Reduction: -133% (went from 6385 bytes to 14882 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 961 ms, reducing file size with 57% (went from 6385 bytes to 2716 bytes)
