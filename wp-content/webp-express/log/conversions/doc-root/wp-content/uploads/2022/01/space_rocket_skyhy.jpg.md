WebP Express 0.19.1. Conversion triggered using bulk conversion, 2022-01-10 12:50:36

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.28
- Server software: Apache/2.4.29 (Ubuntu)

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2022/01/space_rocket_skyhy.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2022/01/space_rocket_skyhy.jpg.webp
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
- source: [doc-root]/wp-content/uploads/2022/01/space_rocket_skyhy.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2022/01/space_rocket_skyhy.jpg.webp
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
- Executing: cwebp -version 2>&1. Result: *Exec failed* (the cwebp binary was not found at path: cwebp, or it had missing library dependencies)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "vitalik" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "vitalik" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "vitalik" does not have permission to execute that binary)

**Error: ** **No cwebp binaries could be executed (permission denied for user: "vitalik").** 
No cwebp binaries could be executed (permission denied for user: "vitalik").
cwebp failed in 65 ms

*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 1 ms

*Trying: imagemagick* 

**Error: ** **imagemagick is not installed (cannot execute: "convert")** 
imagemagick is not installed (cannot execute: "convert")
imagemagick failed in 2 ms

*Trying: graphicsmagick* 

**Error: ** **gmagick is not installed** 
gmagick is not installed
graphicsmagick failed in 2 ms

*Trying: ffmpeg* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2022/01/space_rocket_skyhy.jpg
- destination: [doc-root]/wp-content/webp-express/webp-images/uploads/2022/01/space_rocket_skyhy.jpg.webp
- log-call-arguments: true
- metadata: "none"
- method: 4
- quality: 70

The following options have not been explicitly set, so using the following defaults:
- default-quality: 75
- max-quality: 85
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- encoding
- near-lossless
- use-nice
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
using nice
Executing command: nice ffmpeg -i '[doc-root]/wp-content/uploads/2022/01/space_rocket_skyhy.jpg' -y -qscale '70' -lossless 0 -compression_level 4 '[doc-root]/wp-content/webp-express/webp-images/uploads/2022/01/space_rocket_skyhy.jpg.webp.lossy.webp' 2>&1

*Output:* 
ffmpeg version 3.4.8-0ubuntu0.2 Copyright (c) 2000-2020 the FFmpeg developers
  built with gcc 7 (Ubuntu 7.5.0-3ubuntu1~18.04)
  configuration: --prefix=/usr --extra-version=0ubuntu0.2 --toolchain=hardened --libdir=/usr/lib/x86_64-linux-gnu --incdir=/usr/include/x86_64-linux-gnu --enable-gpl --disable-stripping --enable-avresample --enable-avisynth --enable-gnutls --enable-ladspa --enable-libass --enable-libbluray --enable-libbs2b --enable-libcaca --enable-libcdio --enable-libflite --enable-libfontconfig --enable-libfreetype --enable-libfribidi --enable-libgme --enable-libgsm --enable-libmp3lame --enable-libmysofa --enable-libopenjpeg --enable-libopenmpt --enable-libopus --enable-libpulse --enable-librubberband --enable-librsvg --enable-libshine --enable-libsnappy --enable-libsoxr --enable-libspeex --enable-libssh --enable-libtheora --enable-libtwolame --enable-libvorbis --enable-libvpx --enable-libwavpack --enable-libwebp --enable-libx265 --enable-libxml2 --enable-libxvid --enable-libzmq --enable-libzvbi --enable-omx --enable-openal --enable-opengl --enable-sdl2 --enable-libdc1394 --enable-libdrm --enable-libiec61883 --enable-chromaprint --enable-frei0r --enable-libopencv --enable-libx264 --enable-shared
  libavutil      55. 78.100 / 55. 78.100
  libavcodec     57.107.100 / 57.107.100
  libavformat    57. 83.100 / 57. 83.100
  libavdevice    57. 10.100 / 57. 10.100
  libavfilter     6.107.100 /  6.107.100
  libavresample   3.  7.  0 /  3.  7.  0
  libswscale      4.  8.100 /  4.  8.100
  libswresample   2.  9.100 /  2.  9.100
  libpostproc    54.  7.100 / 54.  7.100
Input #0, image2, from '[doc-root]/wp-content/uploads/2022/01/space_rocket_skyhy.jpg':
  Duration: 00:00:00.04, start: 0.000000, bitrate: 37273 kb/s
    Stream #0:0: Video: mjpeg, yuvj444p(pc, bt470bg/unknown/unknown), 1920x1080, 25 tbr, 25 tbn, 25 tbc
Please use -q:a or -q:v, -qscale is ambiguous
Stream mapping:
  Stream #0:0 -> #0:0 (mjpeg (native) -> webp (libwebp_anim))
Press [q] to stop, [?] for help
[swscaler @ 0x55c3f199d140] deprecated pixel format used, make sure you did set range correctly
Output #0, webp, to '[doc-root]/wp-content/webp-express/webp-images/uploads/2022/01/space_rocket_skyhy.jpg.webp.lossy.webp':
  Metadata:
    encoder         : Lavf57.83.100
    Stream #0:0: Video: webp (libwebp_anim), bgra, 1920x1080, q=2-31, 200 kb/s, 25 fps, 1k tbn, 25 tbc
    Metadata:
      encoder         : Lavc57.107.100 libwebp_anim
[libwebp_anim @ 0x55c3f1954740] Using libwebp for RGB-to-YUV conversion. You may want to consider passing in YUV instead for lossy encoding.
frame=    1 fps=0.0 q=-0.0 Lsize=      24kB time=00:00:00.04 bitrate=4773.1kbits/s speed=0.291x
video:24kB audio:0kB subtitle:0kB other streams:0kB global headers:0kB muxing overhead: 0.000000%

success
Reduction: 87% (went from 182 kb to 24 kb)

Converting to lossless
using nice
Executing command: nice ffmpeg -i '[doc-root]/wp-content/uploads/2022/01/space_rocket_skyhy.jpg' -y -qscale '70' -lossless 1 -compression_level 4 '[doc-root]/wp-content/webp-express/webp-images/uploads/2022/01/space_rocket_skyhy.jpg.webp.lossless.webp' 2>&1

*Output:* 
ffmpeg version 3.4.8-0ubuntu0.2 Copyright (c) 2000-2020 the FFmpeg developers
  built with gcc 7 (Ubuntu 7.5.0-3ubuntu1~18.04)
  configuration: --prefix=/usr --extra-version=0ubuntu0.2 --toolchain=hardened --libdir=/usr/lib/x86_64-linux-gnu --incdir=/usr/include/x86_64-linux-gnu --enable-gpl --disable-stripping --enable-avresample --enable-avisynth --enable-gnutls --enable-ladspa --enable-libass --enable-libbluray --enable-libbs2b --enable-libcaca --enable-libcdio --enable-libflite --enable-libfontconfig --enable-libfreetype --enable-libfribidi --enable-libgme --enable-libgsm --enable-libmp3lame --enable-libmysofa --enable-libopenjpeg --enable-libopenmpt --enable-libopus --enable-libpulse --enable-librubberband --enable-librsvg --enable-libshine --enable-libsnappy --enable-libsoxr --enable-libspeex --enable-libssh --enable-libtheora --enable-libtwolame --enable-libvorbis --enable-libvpx --enable-libwavpack --enable-libwebp --enable-libx265 --enable-libxml2 --enable-libxvid --enable-libzmq --enable-libzvbi --enable-omx --enable-openal --enable-opengl --enable-sdl2 --enable-libdc1394 --enable-libdrm --enable-libiec61883 --enable-chromaprint --enable-frei0r --enable-libopencv --enable-libx264 --enable-shared
  libavutil      55. 78.100 / 55. 78.100
  libavcodec     57.107.100 / 57.107.100
  libavformat    57. 83.100 / 57. 83.100
  libavdevice    57. 10.100 / 57. 10.100
  libavfilter     6.107.100 /  6.107.100
  libavresample   3.  7.  0 /  3.  7.  0
  libswscale      4.  8.100 /  4.  8.100
  libswresample   2.  9.100 /  2.  9.100
  libpostproc    54.  7.100 / 54.  7.100
Input #0, image2, from '[doc-root]/wp-content/uploads/2022/01/space_rocket_skyhy.jpg':
  Duration: 00:00:00.04, start: 0.000000, bitrate: 37273 kb/s
    Stream #0:0: Video: mjpeg, yuvj444p(pc, bt470bg/unknown/unknown), 1920x1080, 25 tbr, 25 tbn, 25 tbc
Please use -q:a or -q:v, -qscale is ambiguous
Stream mapping:
  Stream #0:0 -> #0:0 (mjpeg (native) -> webp (libwebp_anim))
Press [q] to stop, [?] for help
[swscaler @ 0x5557e7becf20] deprecated pixel format used, make sure you did set range correctly
Output #0, webp, to '[doc-root]/wp-content/webp-express/webp-images/uploads/2022/01/space_rocket_skyhy.jpg.webp.lossless.webp':
  Metadata:
    encoder         : Lavf57.83.100
    Stream #0:0: Video: webp (libwebp_anim), bgra, 1920x1080, q=2-31, 200 kb/s, 25 fps, 1k tbn, 25 tbc
    Metadata:
      encoder         : Lavc57.107.100 libwebp_anim
frame=    1 fps=0.0 q=-0.0 size=       0kB time=00:00:00.00 bitrate=   0.0kbits/s speed=0.00105x    frame=    1 fps=0.0 q=-0.0 Lsize=     532kB time=00:00:00.04 bitrate=106259.5kbits/s speed=0.0431x
video:532kB audio:0kB subtitle:0kB other streams:0kB global headers:0kB muxing overhead: 0.000000%

success
Reduction: -192% (went from 182 kb to 532 kb)

Picking lossy
ffmpeg succeeded :)

Converted image in 1310 ms, reducing file size with 87% (went from 182 kb to 24 kb)
