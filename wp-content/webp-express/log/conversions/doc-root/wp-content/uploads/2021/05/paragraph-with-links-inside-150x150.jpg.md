WebP Express 0.19.1. Conversion triggered using bulk conversion, 2021-05-31 10:50:49

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside-150x150.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside-150x150.jpg.webp
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
- source: E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside-150x150.jpg
- destination: E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside-150x150.jpg.webp
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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside-150x150.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside-150x150.jpg.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside-150x150.jpg.webp.lossy.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside-150x150.jpg
Dimension: 150 x 150
Output:    830 bytes Y-U-V-All-PSNR 42.02 48.77 52.39   43.46 dB
           (0.30 bpp)
block count:  intra4:         19  (19.00%)
              intra16:        81  (81.00%)
              skipped:        61  (61.00%)
bytes used:  header:             43  (5.2%)
             mode-partition:    128  (15.4%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     565 |       3 |       0 |       0 |     568  (68.4%)
 intra16-coeffs:  |      12 |       2 |       0 |       1 |      15  (1.8%)
  chroma coeffs:  |      32 |       2 |       0 |      12 |      46  (5.5%)
    macroblocks:  |      35%|       2%|       0%|      63%|     100
      quantizer:  |      39 |      35 |      28 |      20 |
   filter level:  |      11 |       8 |       5 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     609 |       7 |       0 |      13 |     629  (75.8%)

Success
Reduction: 57% (went from 1923 bytes to 830 bytes)

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
E:\OSPanel\domains\local-skyrora\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-110-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside-150x150.jpg" -o "E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside-150x150.jpg.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'E:\OSPanel\domains\local-skyrora/wp-content/webp-express/webp-images/uploads/2021\05\paragraph-with-links-inside-150x150.jpg.webp.lossless.webp'
File:      E:\OSPanel\domains\local-skyrora/wp-content/uploads/2021/05/paragraph-with-links-inside-150x150.jpg
Dimension: 150 x 150
Output:    3384 bytes (1.20 bpp)
Lossless-ARGB compressed size: 3384 bytes
  * Header size: 217 bytes, image data size: 3141
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=2 cache=5

Success
Reduction: -76% (went from 1923 bytes to 3384 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 1253 ms, reducing file size with 57% (went from 1923 bytes to 830 bytes)
