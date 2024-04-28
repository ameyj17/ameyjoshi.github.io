---
title: "Developing and Optimizing SLAM Algorithms using Synthetic Lidar Data: A Comprehensive Study on Scenario Simulation, Point Cloud Generation, and Pose Graph Optimization in 3D Environments"
excerpt: " "
collection: Portfolio"
---
The evaluation of a lidar perception algorithm was conducted using synthetic lidar data generated from the Automated Driving Toolbox for Unreal Engine simulation environment found in the drivingsim3d library of Simulink blocks. The environment was initially set up on a city block with a single vehicle following a predefined trajectory, and the recorded drive segment was obtained using the helperSelectSceneWaypoints function. The synthetic lidar data was then recorded and visualized in the workspace, with the streaming point clouds displayed using the pcplayer block, while the Visualize INS Path Function block depicted the streaming INS data. Upon completion of the simulation, a structure containing variables was saved in the sim out variable, and the sensor data in the workspace served as the basis for developing a perception algorithm, which constructed a map of the surroundings through SLAM. This tool can also be employed in real-world scenarios.

| ![Short Image](/ameyjoshi.github.io/images/LIDAR_2.jpg) | ![Short Image](/ameyjoshi.github.io/images/LIDAR_2.1.jpg) | ![Short Image](/ameyjoshi.github.io/images/LIDAR_2.2.jpg) |

