WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-31 10:50:46

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside.jpg.webp
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
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside.jpg.webp
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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside.jpg.webp.lossy.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside.jpg
Dimension: 840 x 400
Output:    8592 bytes Y-U-V-All-PSNR 45.36 52.20 56.41   46.82 dB
           (0.20 bpp)
block count:  intra4:        172  (12.98%)
              intra16:      1153  (87.02%)
              skipped:      1114  (84.08%)
bytes used:  header:            239  (2.8%)
             mode-partition:   1212  (14.1%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    6886 |       0 |       0 |       0 |    6886  (80.1%)
 intra16-coeffs:  |      31 |       0 |       0 |       4 |      35  (0.4%)
  chroma coeffs:  |     177 |       0 |       0 |      12 |     189  (2.2%)
    macroblocks:  |      17%|       0%|       0%|      83%|    1325
      quantizer:  |      39 |      38 |      32 |      24 |
   filter level:  |      11 |       8 |       6 |       4 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    7094 |       0 |       0 |      16 |    7110  (82.8%)

Success
Reduction: 85% (went from 57 kb to 8 kb)

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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside.jpg.webp.lossless.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside.jpg
Dimension: 840 x 400
Output:    14076 bytes (0.34 bpp)
Lossless-ARGB compressed size: 14076 bytes
  * Header size: 381 bytes, image data size: 13669
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: 76% (went from 57 kb to 14 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1329 ms, reducing file size with 85% (went from 57 kb to 8 kb)
