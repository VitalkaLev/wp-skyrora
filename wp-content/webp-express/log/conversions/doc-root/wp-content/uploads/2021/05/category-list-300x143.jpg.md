WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-31 10:58:10

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/category-list-300x143.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\category-list-300x143.jpg.webp
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
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/category-list-300x143.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\category-list-300x143.jpg.webp
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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/category-list-300x143.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\category-list-300x143.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\category-list-300x143.jpg.webp.lossy.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/category-list-300x143.jpg
Dimension: 300 x 143
Output:    2278 bytes Y-U-V-All-PSNR 40.22 43.34 44.13   41.10 dB
           (0.42 bpp)
block count:  intra4:         74  (43.27%)
              intra16:        97  (56.73%)
              skipped:        64  (37.43%)
bytes used:  header:             55  (2.4%)
             mode-partition:    375  (16.5%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1400 |       0 |      13 |       0 |    1413  (62.0%)
 intra16-coeffs:  |      59 |       0 |       4 |       1 |      64  (2.8%)
  chroma coeffs:  |     331 |       0 |       6 |       5 |     342  (15.0%)
    macroblocks:  |      60%|       1%|       7%|      32%|     171
      quantizer:  |      36 |      28 |      19 |      16 |
   filter level:  |      23 |       6 |       3 |       2 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1790 |       0 |      23 |       6 |    1819  (79.9%)

Success
Reduction: 67% (went from 6840 bytes to 2278 bytes)

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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/category-list-300x143.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\category-list-300x143.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\category-list-300x143.jpg.webp.lossless.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/category-list-300x143.jpg
Dimension: 300 x 143
Output:    14352 bytes (2.68 bpp)
Lossless-ARGB compressed size: 14352 bytes
  * Header size: 815 bytes, image data size: 13511
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=0

Success
Reduction: -110% (went from 6840 bytes to 14352 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 1083 ms, reducing file size with 67% (went from 6840 bytes to 2278 bytes)
