WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-06-01 09:53:08

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/look-other-products.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\look-other-products.jpg.webp
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
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/look-other-products.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\look-other-products.jpg.webp
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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/look-other-products.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\look-other-products.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\look-other-products.jpg.webp.lossy.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/look-other-products.jpg
Dimension: 840 x 400
Output:    7820 bytes Y-U-V-All-PSNR 44.71 49.83 52.32   45.97 dB
           (0.19 bpp)
block count:  intra4:        179  (13.51%)
              intra16:      1146  (86.49%)
              skipped:      1058  (79.85%)
bytes used:  header:            233  (3.0%)
             mode-partition:   1386  (17.7%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    5565 |       5 |       0 |       0 |    5570  (71.2%)
 intra16-coeffs:  |     122 |       1 |       0 |       3 |     126  (1.6%)
  chroma coeffs:  |     447 |       0 |       0 |      27 |     474  (6.1%)
    macroblocks:  |      32%|       0%|       0%|      68%|    1325
      quantizer:  |      39 |      35 |      30 |      21 |
   filter level:  |      16 |       7 |       5 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    6134 |       6 |       0 |      30 |    6170  (78.9%)

Success
Reduction: 88% (went from 66 kb to 8 kb)

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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/look-other-products.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\look-other-products.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\look-other-products.jpg.webp.lossless.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/look-other-products.jpg
Dimension: 840 x 400
Output:    19928 bytes (0.47 bpp)
Lossless-ARGB compressed size: 19928 bytes
  * Header size: 817 bytes, image data size: 19086
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=9

Success
Reduction: 71% (went from 66 kb to 19 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1009 ms, reducing file size with 88% (went from 66 kb to 8 kb)
