/*
 * Gross subtraction and federal tax rate for that subtraction. Based on marital status and exemptions.
 * Structure is:
 * which status? => which exemptions? = arrays of two values - subtraction and tax rate (based on gross).
 *
 * @returns {Taxes}
 */
function Taxes() {

    this.taxesList = {
        /*
         * Weekly frequency
         * */
        'weekly': {
            'Single': [
                /*
                 * When exemptions = 0
                 * */
                {
                    /*
                     * Gross over:
                     * */
                    '0': { 'subtract': 42.00, 'rate': 0.1 },
                    '214': { 'subtract': 99.33, 'rate': 0.15 },
                    '739': { 'subtract': 355.20, 'rate': 0.25 },
                    '1732': { 'subtract': 502.71, 'rate': 0.28 },
                    '3566': { 'subtract': 966.85, 'rate': 0.33 },
                    '7703': { 'subtract': 1351.77, 'rate': 0.35 },
                    '7735': { 'subtract': 2093.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 1
                 * */
                {
                    '0': { 'subtract': 117.00, 'rate': 0.1 },
                    '289': { 'subtract': 174.33, 'rate': 0.15 },
                    '814': { 'subtract': 430.20, 'rate': 0.25 },
                    '1807': { 'subtract': 577.71, 'rate': 0.28 },
                    '3641': { 'subtract': 1041.85, 'rate': 0.33 },
                    '7778': { 'subtract': 1426.77, 'rate': 0.35 },
                    '7810': { 'subtract': 2168.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 2
                 * */
                {
                    '0': { 'subtract': 192.00, 'rate': 0.1 },
                    '364': { 'subtract': 249.33, 'rate': 0.15 },
                    '889': { 'subtract': 505.20, 'rate': 0.25 },
                    '1882': { 'subtract': 652.71, 'rate': 0.28 },
                    '3716': { 'subtract': 1116.55, 'rate': 0.33 },
                    '7853': { 'subtract': 1501.77, 'rate': 0.35 },
                    '7885': { 'subtract': 2243.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 3
                 * */
                {
                    '0': { 'subtract': 267.00, 'rate': 0.1 },
                    '439': { 'subtract': 324.33, 'rate': 0.15 },
                    '964': { 'subtract': 580.20, 'rate': 0.25 },
                    '1957': { 'subtract': 727.71, 'rate': 0.28 },
                    '3791': { 'subtract': 1191.55, 'rate': 0.33 },
                    '7928': { 'subtract': 1576.77, 'rate': 0.35 },
                    '7960': { 'subtract': 2318.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 4
                 * */
                {
                    '0': { 'subtract': 342.00, 'rate': 0.1 },
                    '514': { 'subtract': 399.33, 'rate': 0.15 },
                    '1039': { 'subtract': 655.20, 'rate': 0.25 },
                    '2032': { 'subtract': 802.71, 'rate': 0.28 },
                    '3866': { 'subtract': 1266.55, 'rate': 0.33 },
                    '8003': { 'subtract': 1651.77, 'rate': 0.35 },
                    '8035': { 'subtract': 2393.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 5
                 * */
                {
                    '0': { 'subtract': 417.00, 'rate': 0.1 },
                    '589': { 'subtract': 474.33, 'rate': 0.15 },
                    '1114': { 'subtract': 730.20, 'rate': 0.25 },
                    '2107': { 'subtract': 877.71, 'rate': 0.28 },
                    '3941': { 'subtract': 1341.55, 'rate': 0.33 },
                    '8078': { 'subtract': 1726.77, 'rate': 0.35 },
                    '8110': { 'subtract': 2468.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 6
                 * */
                {
                    '0': { 'subtract': 492.00, 'rate': 0.1 },
                    '664': { 'subtract': 549.33, 'rate': 0.15 },
                    '1189': { 'subtract': 805.20, 'rate': 0.25 },
                    '2182': { 'subtract': 952.71, 'rate': 0.28 },
                    '4016': { 'subtract': 416.55, 'rate': 0.33 },
                    '8153': { 'subtract': 801.77, 'rate': 0.35 },
                    '8185': { 'subtract': 2543.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 7
                 * */
                {
                    '0': { 'subtract': 567.00, 'rate': 0.1 },
                    '739': { 'subtract': 624.33, 'rate': 0.15 },
                    '1264': { 'subtract': 880.20, 'rate': 0.25 },
                    '2257': { 'subtract': 1027.71, 'rate': 0.28 },
                    '4091': { 'subtract': 1491.55, 'rate': 0.33 },
                    '8228': { 'subtract': 1876.77, 'rate': 0.35 },
                    '8260': { 'subtract': 2618.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 8
                 * */
                {
                    '0': { 'subtract': 642.00, 'rate': 0.1 },
                    '814': { 'subtract': 699.33, 'rate': 0.15 },
                    '1339': { 'subtract': 955.20, 'rate': 0.25 },
                    '2332': { 'subtract': 1102.71, 'rate': 0.28 },
                    '4166': { 'subtract': 1566.55, 'rate': 0.33 },
                    '8303': { 'subtract': 1951.77, 'rate': 0.35 },
                    '8335': { 'subtract': 2693.26, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 9
                 * */
                {
                    '0': { 'subtract': 717.00, 'rate': 0.1 },
                    '889': { 'subtract': 774.33, 'rate': 0.15 },
                    '1414': { 'subtract': 1030.20, 'rate': 0.25 },
                    '2407': { 'subtract': 1177.71, 'rate': 0.28 },
                    '4241': { 'subtract': 1641.55, 'rate': 0.33 },
                    '8378': { 'subtract': 2026.77, 'rate': 0.35 },
                    '8410': { 'subtract': 2768.26, 'rate': 0.396 }
                }
            ],
            'Married': [
                /*
                 * When exemptions = 0
                 * */
                {
                    '0': { 'subtract': 160.00, 'rate': 0.1 },
                    '503': { 'subtract': 274.33, 'rate': 0.15 },
                    '1554': { 'subtract': 786.20, 'rate': 0.25 },
                    '2975': { 'subtract': 1020.71, 'rate': 0.28 },
                    '4449': { 'subtract': 1540.15, 'rate': 0.33 },
                    '7820': { 'subtract': 1899.00, 'rate': 0.35 },
                    '8813': { 'subtract': 2702.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 1
                 * */
                {
                    '0': { 'subtract': 235.00, 'rate': 0.1 },
                    '578': { 'subtract': 349.33, 'rate': 0.15 },
                    '1629': { 'subtract': 861.20, 'rate': 0.25 },
                    '3050': { 'subtract': 1095.71, 'rate': 0.28 },
                    '4524': { 'subtract': 1615.15, 'rate': 0.33 },
                    '7895': { 'subtract': 1974.00, 'rate': 0.35 },
                    '8888': { 'subtract': 2777.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 2
                 * */
                {
                    '0': { 'subtract': 310.00, 'rate': 0.1 },
                    '653': { 'subtract': 424.33, 'rate': 0.15 },
                    '1704': { 'subtract': 936.20, 'rate': 0.25 },
                    '3125': { 'subtract': 1170.71, 'rate': 0.28 },
                    '4599': { 'subtract': 1690.15, 'rate': 0.33 },
                    '7970': { 'subtract': 2049.00, 'rate': 0.35 },
                    '8963': { 'subtract': 2852.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 3
                 * */
                {
                    '0': { 'subtract': 385.00, 'rate': 0.1 },
                    '728': { 'subtract': 499.33, 'rate': 0.15 },
                    '1728': { 'subtract': 1011.20, 'rate': 0.25 },
                    '3200': { 'subtract': 1245.71, 'rate': 0.28 },
                    '4674': { 'subtract': 1765.15, 'rate': 0.33 },
                    '8045': { 'subtract': 2124.00, 'rate': 0.35 },
                    '9038': { 'subtract': 2927.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 4
                 * */
                {
                    '0': { 'subtract': 460.00, 'rate': 0.1 },
                    '803': { 'subtract': 574.33, 'rate': 0.15 },
                    '1854': { 'subtract': 1086.20, 'rate': 0.25 },
                    '3275': { 'subtract': 1320.71, 'rate': 0.28 },
                    '4749': { 'subtract': 1840.15, 'rate': 0.33 },
                    '8120': { 'subtract': 2199.00, 'rate': 0.35 },
                    '9113': { 'subtract': 3002.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 5
                 * */
                {
                    '0': { 'subtract': 535.00, 'rate': 0.1 },
                    '878': { 'subtract': 649.33, 'rate': 0.15 },
                    '1929': { 'subtract': 1161.20, 'rate': 0.25 },
                    '3350': { 'subtract': 1395.71, 'rate': 0.28 },
                    '4824': { 'subtract': 1915.15, 'rate': 0.33 },
                    '8195': { 'subtract': 2274.00, 'rate': 0.35 },
                    '9188': { 'subtract': 3077.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 6
                 * */
                {
                    '0': { 'subtract': 610.00, 'rate': 0.1 },
                    '953': { 'subtract': 724.33, 'rate': 0.15 },
                    '2004': { 'subtract': 1236.20, 'rate': 0.25 },
                    '3425': { 'subtract': 1470.71, 'rate': 0.28 },
                    '4899': { 'subtract': 1990.15, 'rate': 0.33 },
                    '8270': { 'subtract': 2349.00, 'rate': 0.35 },
                    '9263': { 'subtract': 3152.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 7
                 * */
                {
                    '0': { 'subtract': 685.00, 'rate': 0.1 },
                    '1028': { 'subtract': 799.33, 'rate': 0.15 },
                    '2079': { 'subtract': 1311.20, 'rate': 0.25 },
                    '3500': { 'subtract': 1545.71, 'rate': 0.28 },
                    '4974': { 'subtract': 2065.15, 'rate': 0.33 },
                    '8345': { 'subtract': 2424.00, 'rate': 0.35 },
                    '9338': { 'subtract': 3227.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 8
                 * */
                {
                    '0': { 'subtract': 760.00, 'rate': 0.1 },
                    '1103': { 'subtract': 874.33, 'rate': 0.15 },
                    '2154': { 'subtract': 1386.20, 'rate': 0.25 },
                    '3575': { 'subtract': 1620.71, 'rate': 0.28 },
                    '5049': { 'subtract': 2140.15, 'rate': 0.33 },
                    '8420': { 'subtract': 2499.00, 'rate': 0.35 },
                    '9413': { 'subtract': 3302.14, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 9
                 * */
                {
                    '0': { 'subtract': 835.00, 'rate': 0.1 },
                    '1178': { 'subtract': 949.33, 'rate': 0.15 },
                    '2229': { 'subtract': 1461.20, 'rate': 0.25 },
                    '3650': { 'subtract': 1695.71, 'rate': 0.28 },
                    '5124': { 'subtract': 2215.15, 'rate': 0.33 },
                    '8495': { 'subtract': 2574.00, 'rate': 0.35 },
                    '9488': { 'subtract': 3377.14, 'rate': 0.396 }
                }
            ]
        },
        /*
         * Bi-weekly frequency
         * */
        'biweekly': {
            'Single': [
                /*
                 * When exemptions = 0
                 * */
                {
                    '0': { 'subtract': 85.00, 'rate': 0.1 },
                    '428': { 'subtract': 199.33, 'rate': 0.15 },
                    '1479': { 'subtract': 711.20, 'rate': 0.25 },
                    '3463': { 'subtract': 1006.04, 'rate': 0.28 },
                    '7133': { 'subtract': 1934.36, 'rate': 0.33 },
                    '15406': { 'subtract': 2704.17, 'rate': 0.35 },
                    '15469': { 'subtract': 4186.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 1
                 * */
                {
                    '0': { 'subtract': 235.00, 'rate': 0.1 },
                    '578': { 'subtract': 349.33, 'rate': 0.15 },
                    '1629': { 'subtract': 861.20, 'rate': 0.25 },
                    '3613': { 'subtract': 1156.04, 'rate': 0.28 },
                    '7283': { 'subtract': 2084.36, 'rate': 0.33 },
                    '15556': { 'subtract': 2854.17, 'rate': 0.35 },
                    '15619': { 'subtract': 4336.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 2
                 * */
                {
                    '0': { 'subtract': 385.00, 'rate': 0.1 },
                    '728': { 'subtract': 499.33, 'rate': 0.15 },
                    '1779': { 'subtract': 1011.20, 'rate': 0.25 },
                    '3763': { 'subtract': 1306.04, 'rate': 0.28 },
                    '7433': { 'subtract': 2234.36, 'rate': 0.33 },
                    '15706': { 'subtract': 3004.17, 'rate': 0.35 },
                    '15769': { 'subtract': 4486.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 3
                 * */
                {
                    '0': { 'subtract': 535.00, 'rate': 0.1 },
                    '878': { 'subtract': 649.33, 'rate': 0.15 },
                    '1929': { 'subtract': 1161.20, 'rate': 0.25 },
                    '3913': { 'subtract': 1456.04, 'rate': 0.28 },
                    '7583': { 'subtract': 2384.36, 'rate': 0.33 },
                    '15856': { 'subtract': 3154.17, 'rate': 0.35 },
                    '15919': { 'subtract': 4636.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 4
                 * */
                {
                    '0': { 'subtract': 685.00, 'rate': 0.1 },
                    '1028': { 'subtract': 799.33, 'rate': 0.15 },
                    '2079': { 'subtract': 1311.20, 'rate': 0.25 },
                    '4063': { 'subtract': 1606.04, 'rate': 0.28 },
                    '7733': { 'subtract': 2534.36, 'rate': 0.33 },
                    '16006': { 'subtract': 3304.17, 'rate': 0.35 },
                    '16069': { 'subtract': 4786.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 5
                 * */
                {
                    '0': { 'subtract': 835.00, 'rate': 0.1 },
                    '1178': { 'subtract': 949.33, 'rate': 0.15 },
                    '2229': { 'subtract': 1461.20, 'rate': 0.25 },
                    '4213': { 'subtract': 1756.04, 'rate': 0.28 },
                    '7883': { 'subtract': 2684.36, 'rate': 0.33 },
                    '16156': { 'subtract': 3454.17, 'rate': 0.35 },
                    '16219': { 'subtract': 4936.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 6
                 * */
                {
                    '0': { 'subtract': 985.00, 'rate': 0.1 },
                    '1328': { 'subtract': 1099.33, 'rate': 0.15 },
                    '2379': { 'subtract': 1611.20, 'rate': 0.25 },
                    '4363': { 'subtract': 1906.04, 'rate': 0.28 },
                    '8033': { 'subtract': 2834.36, 'rate': 0.33 },
                    '16306': { 'subtract': 3604.17, 'rate': 0.35 },
                    '16369': { 'subtract': 5086.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 7
                 * */
                {
                    '0': { 'subtract': 1135.00, 'rate': 0.1 },
                    '1478': { 'subtract': 1249.33, 'rate': 0.15 },
                    '2529': { 'subtract': 1761.20, 'rate': 0.25 },
                    '4513': { 'subtract': 2056.04, 'rate': 0.28 },
                    '8183': { 'subtract': 2984.36, 'rate': 0.33 },
                    '16456': { 'subtract': 3754.17, 'rate': 0.35 },
                    '16519': { 'subtract': 5236.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 8
                 * */
                {
                    '0': { 'subtract': 1285.00, 'rate': 0.1 },
                    '1628': { 'subtract': 1399.33, 'rate': 0.15 },
                    '2679': { 'subtract': 1911.20, 'rate': 0.25 },
                    '4663': { 'subtract': 2206.04, 'rate': 0.28 },
                    '8333': { 'subtract': 3134.36, 'rate': 0.33 },
                    '16606': { 'subtract': 3904.17, 'rate': 0.35 },
                    '16669': { 'subtract': 5386.95, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 9
                 * */
                {
                    '0': { 'subtract': 1435.00, 'rate': 0.1 },
                    '1778': { 'subtract': 1549.33, 'rate': 0.15 },
                    '2829': { 'subtract': 2061.20, 'rate': 0.25 },
                    '4813': { 'subtract': 2356.04, 'rate': 0.28 },
                    '8483': { 'subtract': 3284.36, 'rate': 0.33 },
                    '16756': { 'subtract': 4054.17, 'rate': 0.35 },
                    '16819': { 'subtract': 5536.95, 'rate': 0.396 }
                }
            ],
            'Married': [
                /*
                 * When exemptions = 0
                 * */
                {
                    '0': { 'subtract': 319.00, 'rate': 0.1 },
                    '1006': { 'subtract': 548.00, 'rate': 0.15 },
                    '3108': { 'subtract': 1572.00, 'rate': 0.25 },
                    '5950': { 'subtract': 2041.07, 'rate': 0.28 },
                    '8898': { 'subtract': 3080.00, 'rate': 0.33 },
                    '15640': { 'subtract': 3797.71, 'rate': 0.35 },
                    '17627': { 'subtract': 5404.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 1
                 * */
                {
                    '0': { 'subtract': 469.00, 'rate': 0.1 },
                    '1156': { 'subtract': 698.00, 'rate': 0.15 },
                    '3258': { 'subtract': 1722.00, 'rate': 0.25 },
                    '6100': { 'subtract': 2191.07, 'rate': 0.28 },
                    '9048': { 'subtract': 3230.00, 'rate': 0.33 },
                    '15790': { 'subtract': 3947.71, 'rate': 0.35 },
                    '17777': { 'subtract': 5554.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 2
                 * */
                {
                    '0': { 'subtract': 619.00, 'rate': 0.1 },
                    '1306': { 'subtract': 848.00, 'rate': 0.15 },
                    '3408': { 'subtract': 1872.00, 'rate': 0.25 },
                    '6250': { 'subtract': 2341.07, 'rate': 0.28 },
                    '9198': { 'subtract': 3380.00, 'rate': 0.33 },
                    '15940': { 'subtract': 4097.71, 'rate': 0.35 },
                    '17927': { 'subtract': 5704.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 3
                 * */
                {
                    '0': { 'subtract': 769.00, 'rate': 0.1 },
                    '1456': { 'subtract': 998.00, 'rate': 0.15 },
                    '3558': { 'subtract': 2022.00, 'rate': 0.25 },
                    '6400': { 'subtract': 2491.07, 'rate': 0.28 },
                    '9348': { 'subtract': 3530.00, 'rate': 0.33 },
                    '16090': { 'subtract': 4247.71, 'rate': 0.35 },
                    '18077': { 'subtract': 5854.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 4
                 * */
                {
                    '0': { 'subtract': 919.00, 'rate': 0.1 },
                    '1606': { 'subtract': 1148.00, 'rate': 0.15 },
                    '3708': { 'subtract': 2172.00, 'rate': 0.25 },
                    '6550': { 'subtract': 2641.07, 'rate': 0.28 },
                    '9498': { 'subtract': 3680.00, 'rate': 0.33 },
                    '16240': { 'subtract': 4397.71, 'rate': 0.35 },
                    '18227': { 'subtract': 6004.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 5
                 * */
                {
                    '0': { 'subtract': 1069.00, 'rate': 0.1 },
                    '1756': { 'subtract': 1298.00, 'rate': 0.15 },
                    '3858': { 'subtract': 2322.00, 'rate': 0.25 },
                    '6700': { 'subtract': 2791.07, 'rate': 0.28 },
                    '9648': { 'subtract': 3830.00, 'rate': 0.33 },
                    '16390': { 'subtract': 4547.71, 'rate': 0.35 },
                    '18377': { 'subtract': 6154.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 6
                 * */
                {
                    '0': { 'subtract': 1219.00, 'rate': 0.1 },
                    '1906': { 'subtract': 1448.00, 'rate': 0.15 },
                    '4008': { 'subtract': 2472.00, 'rate': 0.25 },
                    '6850': { 'subtract': 2941.07, 'rate': 0.28 },
                    '9798': { 'subtract': 3980.00, 'rate': 0.33 },
                    '16540': { 'subtract': 4697.71, 'rate': 0.35 },
                    '18527': { 'subtract': 6304.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 7
                 * */
                {
                    '0': { 'subtract': 1369.00, 'rate': 0.1 },
                    '2056': { 'subtract': 1598.00, 'rate': 0.15 },
                    '4158': { 'subtract': 2622.00, 'rate': 0.25 },
                    '7000': { 'subtract': 3091.07, 'rate': 0.28 },
                    '9948': { 'subtract': 4130.00, 'rate': 0.33 },
                    '16690': { 'subtract': 4847.71, 'rate': 0.35 },
                    '18677': { 'subtract': 6454.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 8
                 * */
                {
                    '0': { 'subtract': 1519.00, 'rate': 0.1 },
                    '2206': { 'subtract': 1748.00, 'rate': 0.15 },
                    '4308': { 'subtract': 2772.00, 'rate': 0.25 },
                    '7150': { 'subtract': 3241.07, 'rate': 0.28 },
                    '10098': { 'subtract': 4280.00, 'rate': 0.33 },
                    '16840': { 'subtract': 4997.71, 'rate': 0.35 },
                    '18827': { 'subtract': 6604.15, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 9
                 * */
                {
                    '0': { 'subtract': 1669.00, 'rate': 0.1 },
                    '2356': { 'subtract': 1898.00, 'rate': 0.15 },
                    '4458': { 'subtract': 2922.00, 'rate': 0.25 },
                    '7300': { 'subtract': 3391.07, 'rate': 0.28 },
                    '10248': { 'subtract': 4430.00, 'rate': 0.33 },
                    '16990': { 'subtract': 5147.71, 'rate': 0.35 },
                    '18977': { 'subtract': 6754.15, 'rate': 0.396 }
                }
            ]
        },
        /*
         * Semi-monthly frequency
         * */
        'semimonthly': {
            'Single': [
                /*
                 * When exemptions = 0
                 * */
                {
                    '0': { 'subtract': 92.00, 'rate': 0.1 },
                    '464': { 'subtract': 216.00, 'rate': 0.15 },
                    '1602': { 'subtract': 770.40, 'rate': 0.25 },
                    '3752': { 'subtract': 1089.86, 'rate': 0.28 },
                    '7727': { 'subtract': 2095.48, 'rate': 0.33 },
                    '16690': { 'subtract': 2929.46, 'rate': 0.35 },
                    '16758': { 'subtract': 4535.80, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 1
                 * */
                {
                    '0': { 'subtract': 254.50, 'rate': 0.1 },
                    '626.50': { 'subtract': 378.50, 'rate': 0.15 },
                    '1764.50': { 'subtract': 932.90, 'rate': 0.25 },
                    '3914.50': { 'subtract': 1252.36, 'rate': 0.28 },
                    '7889.50': { 'subtract': 2257.98, 'rate': 0.33 },
                    '16852.50': { 'subtract': 3091.96, 'rate': 0.35 },
                    '16920.50': { 'subtract': 4698.30, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 2
                 * */
                {
                    '0': { 'subtract': 417.00, 'rate': 0.1 },
                    '789': { 'subtract': 541.00, 'rate': 0.15 },
                    '1927': { 'subtract': 1095.40, 'rate': 0.25 },
                    '4077': { 'subtract': 1414.86, 'rate': 0.28 },
                    '8052': { 'subtract': 2420.48, 'rate': 0.33 },
                    '17015': { 'subtract': 3254.46, 'rate': 0.35 },
                    '17083': { 'subtract': 4860.80, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 3
                 * */
                {
                    '0': { 'subtract': 579.50, 'rate': 0.1 },
                    '951.50': { 'subtract': 703.50, 'rate': 0.15 },
                    '2089.50': { 'subtract': 1257.90, 'rate': 0.25 },
                    '4239.50': { 'subtract': 1577.36, 'rate': 0.28 },
                    '8214.50': { 'subtract': 2582.98, 'rate': 0.33 },
                    '17177.50': { 'subtract': 3416.96, 'rate': 0.35 },
                    '17245.50': { 'subtract': 5023.30, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 4
                 * */
                {
                    '0': { 'subtract': 742.00, 'rate': 0.1 },
                    '1114': { 'subtract': 866.00, 'rate': 0.15 },
                    '2252': { 'subtract': 1420.40, 'rate': 0.25 },
                    '4402': { 'subtract': 1739.86, 'rate': 0.28 },
                    '8377': { 'subtract': 2745.48, 'rate': 0.33 },
                    '17340': { 'subtract': 3579.46, 'rate': 0.35 },
                    '17408': { 'subtract': 5185.80, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 5
                 * */
                {
                    '0': { 'subtract': 904.50, 'rate': 0.1 },
                    '1276.50': { 'subtract': 1028.50, 'rate': 0.15 },
                    '2414.50': { 'subtract': 1582.90, 'rate': 0.25 },
                    '4564.50': { 'subtract': 1902.36, 'rate': 0.28 },
                    '8539.50': { 'subtract': 2907.98, 'rate': 0.33 },
                    '17502.50': { 'subtract': 3741.96, 'rate': 0.35 },
                    '17570.50': { 'subtract': 5348.30, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 6
                 * */
                {
                    '0': { 'subtract': 1067.00, 'rate': 0.1 },
                    '1439': { 'subtract': 1191.00, 'rate': 0.15 },
                    '2577': { 'subtract': 1745.40, 'rate': 0.25 },
                    '4727': { 'subtract': 2064.86, 'rate': 0.28 },
                    '8702': { 'subtract': 3070.48, 'rate': 0.33 },
                    '17665': { 'subtract': 3904.46, 'rate': 0.35 },
                    '17733': { 'subtract': 5510.80, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 7
                 * */
                {
                    '0': { 'subtract': 1229.50, 'rate': 0.1 },
                    '1601.50': { 'subtract': 1353.50, 'rate': 0.15 },
                    '1739.50': { 'subtract': 1907.90, 'rate': 0.25 },
                    '4889.50': { 'subtract': 2227.36, 'rate': 0.28 },
                    '8864.50': { 'subtract': 3232.98, 'rate': 0.33 },
                    '1827.50': { 'subtract': 4066.96, 'rate': 0.35 },
                    '17895.50': { 'subtract': 5673.30, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 8
                 * */
                {
                    '0': { 'subtract': 1392.00, 'rate': 0.1 },
                    '1764': { 'subtract': 1516.00, 'rate': 0.15 },
                    '2902': { 'subtract': 2070.40, 'rate': 0.25 },
                    '5052': { 'subtract': 2389.86, 'rate': 0.28 },
                    '9027': { 'subtract': 3395.48, 'rate': 0.33 },
                    '17990': { 'subtract': 4229.46, 'rate': 0.35 },
                    '18058': { 'subtract': 5835.80, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 9
                 * */
                {
                    '0': { 'subtract': 1554.50, 'rate': 0.1 },
                    '1926.50': { 'subtract': 1678.50, 'rate': 0.15 },
                    '3064.50': { 'subtract': 2232.90, 'rate': 0.25 },
                    '5214.50': { 'subtract': 2552.36, 'rate': 0.28 },
                    '9189.50': { 'subtract': 3557.98, 'rate': 0.33 },
                    '18152.50': { 'subtract': 4391.96, 'rate': 0.35 },
                    '18220.50': { 'subtract': 5998.30, 'rate': 0.396 }
                }
            ],
            'Married': [
                /*
                 * When exemptions = 0
                 * */
                {
                    '0': { 'subtract': 346.00, 'rate': 0.1 },
                    '1090': { 'subtract': 594.00, 'rate': 0.15 },
                    '3367': { 'subtract': 1703.20, 'rate': 0.25 },
                    '6446': { 'subtract': 2211.36, 'rate': 0.28 },
                    '9640': { 'subtract': 3336.91, 'rate': 0.33 },
                    '16944': { 'subtract': 4114.46, 'rate': 0.35 },
                    '19096': { 'subtract': 5854.74, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 1
                 * */
                {
                    '0': { 'subtract': 508.50, 'rate': 0.1 },
                    '1252.50': { 'subtract': 756.50, 'rate': 0.15 },
                    '3529.50': { 'subtract': 1865.70, 'rate': 0.25 },
                    '6608.50': { 'subtract': 2373.86, 'rate': 0.28 },
                    '9802.50': { 'subtract': 3499.41, 'rate': 0.33 },
                    '17106.50': { 'subtract': 4276.96, 'rate': 0.35 },
                    '19258.50': { 'subtract': 6017.24, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 2
                 * */
                {
                    '0': { 'subtract': 671.00, 'rate': 0.1 },
                    '1415': { 'subtract': 919.00, 'rate': 0.15 },
                    '3692': { 'subtract': 2028.20, 'rate': 0.25 },
                    '6771': { 'subtract': 2536.36, 'rate': 0.28 },
                    '9965': { 'subtract': 3661.91, 'rate': 0.33 },
                    '17269': { 'subtract': 4439.46, 'rate': 0.35 },
                    '19421': { 'subtract': 6179.74, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 3
                 * */
                {
                    '0': { 'subtract': 833.50, 'rate': 0.1 },
                    '1577.50': { 'subtract': 1081.50, 'rate': 0.15 },
                    '3854.50': { 'subtract': 2190.70, 'rate': 0.25 },
                    '6933.50': { 'subtract': 2698.86, 'rate': 0.28 },
                    '10127.50': { 'subtract': 3824.41, 'rate': 0.33 },
                    '17431.50': { 'subtract': 4601.96, 'rate': 0.35 },
                    '19583.50': { 'subtract': 6342.24, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 4
                 * */
                {
                    '0': { 'subtract': 996.00, 'rate': 0.1 },
                    '1740': { 'subtract': 1244.00, 'rate': 0.15 },
                    '4017': { 'subtract': 2353.20, 'rate': 0.25 },
                    '7096': { 'subtract': 2861.36, 'rate': 0.28 },
                    '10290': { 'subtract': 3986.91, 'rate': 0.33 },
                    '17594': { 'subtract': 4764.46, 'rate': 0.35 },
                    '19746': { 'subtract': 6504.74, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 5
                 * */
                {
                    '0': { 'subtract': 1158.50, 'rate': 0.1 },
                    '1902.50': { 'subtract': 1406.50, 'rate': 0.15 },
                    '4179.50': { 'subtract': 2515.70, 'rate': 0.25 },
                    '7258.50': { 'subtract': 3023.86, 'rate': 0.28 },
                    '10452.50': { 'subtract': 4149.41, 'rate': 0.33 },
                    '17756.50': { 'subtract': 4926.96, 'rate': 0.35 },
                    '19908.50': { 'subtract': 6667.24, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 6
                 * */
                {
                    '0': { 'subtract': 1321.00, 'rate': 0.1 },
                    '2065': { 'subtract': 1569.00, 'rate': 0.15 },
                    '4342': { 'subtract': 2678.20, 'rate': 0.25 },
                    '7421': { 'subtract': 3186.36, 'rate': 0.28 },
                    '10615': { 'subtract': 4311.91, 'rate': 0.33 },
                    '17919': { 'subtract': 5089.46, 'rate': 0.35 },
                    '20071': { 'subtract': 6829.74, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 7
                 * */
                {
                    '0': { 'subtract': 1483.50, 'rate': 0.1 },
                    '2227.50': { 'subtract': 1731.50, 'rate': 0.15 },
                    '4504.50': { 'subtract': 2840.70, 'rate': 0.25 },
                    '7583.50': { 'subtract': 3348.86, 'rate': 0.28 },
                    '10777.50': { 'subtract': 4474.41, 'rate': 0.33 },
                    '18081.50': { 'subtract': 5251.96, 'rate': 0.35 },
                    '20233.50': { 'subtract': 6992.24, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 8
                 * */
                {
                    '0': { 'subtract': 1646.00, 'rate': 0.1 },
                    '2390': { 'subtract': 1894.00, 'rate': 0.15 },
                    '4667': { 'subtract': 3003.20, 'rate': 0.25 },
                    '7746': { 'subtract': 3511.36, 'rate': 0.28 },
                    '10940': { 'subtract': 4636.91, 'rate': 0.33 },
                    '18244': { 'subtract': 5414.46, 'rate': 0.35 },
                    '20396': { 'subtract': 7154.74, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 9
                 * */
                {
                    '0': { 'subtract': 1808.50, 'rate': 0.1 },
                    '2552.50': { 'subtract': 2056.50, 'rate': 0.15 },
                    '4829.50': { 'subtract': 3165.70, 'rate': 0.25 },
                    '7908.50': { 'subtract': 3673.86, 'rate': 0.28 },
                    '11102.50': { 'subtract': 4799.41, 'rate': 0.33 },
                    '18406.50': { 'subtract': 5576.96, 'rate': 0.35 },
                    '20558.50': { 'subtract': 7317.24, 'rate': 0.396 }
                }
            ]
        },
        /*
         * Monthly frequency
         * */
        'monthly': {
            'Single': [
                /*
                 * When exemptions = 0
                 * */
                {
                    '0': { 'subtract': 183.00, 'rate': 0.1 },
                    '927': { 'subtract': 431.00, 'rate': 0.15 },
                    '3204': { 'subtract': 1540.20, 'rate': 0.25 },
                    '7504': { 'subtract': 2179.18, 'rate': 0.28 },
                    '15454': { 'subtract': 4190.52, 'rate': 0.33 },
                    '33379': { 'subtract': 5858.43, 'rate': 0.35 },
                    '33517': { 'subtract': 9071.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 1
                 * */
                {
                    '0': { 'subtract': 508.00, 'rate': 0.1 },
                    '1252': { 'subtract': 756.00, 'rate': 0.15 },
                    '3529': { 'subtract': 1865.20, 'rate': 0.25 },
                    '7829': { 'subtract': 2504.18, 'rate': 0.28 },
                    '15779': { 'subtract': 4515.52, 'rate': 0.33 },
                    '33704': { 'subtract': 6183.43, 'rate': 0.35 },
                    '33842': { 'subtract': 9396.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 2
                 * */
                {
                    '0': { 'subtract': 833.00, 'rate': 0.1 },
                    '1577': { 'subtract': 1081.00, 'rate': 0.15 },
                    '3854': { 'subtract': 2190.20, 'rate': 0.25 },
                    '8154': { 'subtract': 2829.18, 'rate': 0.28 },
                    '16104': { 'subtract': 4840.52, 'rate': 0.33 },
                    '34029': { 'subtract': 6508.43, 'rate': 0.35 },
                    '34167': { 'subtract': 9721.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 3
                 * */
                {
                    '0': { 'subtract': 158.00, 'rate': 0.1 },
                    '1902': { 'subtract': 1406.00, 'rate': 0.15 },
                    '4179': { 'subtract': 2515.20, 'rate': 0.25 },
                    '8479': { 'subtract': 3154.18, 'rate': 0.28 },
                    '16429': { 'subtract': 5165.52, 'rate': 0.33 },
                    '34354': { 'subtract': 6833.43, 'rate': 0.35 },
                    '34492': { 'subtract': 10046.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 4
                 * */
                {
                    '0': { 'subtract': 1483.00, 'rate': 0.1 },
                    '2227': { 'subtract': 1731.00, 'rate': 0.15 },
                    '4504': { 'subtract': 2840.20, 'rate': 0.25 },
                    '8804': { 'subtract': 3479.18, 'rate': 0.28 },
                    '16754': { 'subtract': 5490.52, 'rate': 0.33 },
                    '34679': { 'subtract': 7158.43, 'rate': 0.35 },
                    '34817': { 'subtract': 10371.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 5
                 * */
                {
                    '0': { 'subtract': 1808.00, 'rate': 0.1 },
                    '2552': { 'subtract': 2056.00, 'rate': 0.15 },
                    '4829': { 'subtract': 3165.20, 'rate': 0.25 },
                    '9129': { 'subtract': 3804.18, 'rate': 0.28 },
                    '17079': { 'subtract': 5815.52, 'rate': 0.33 },
                    '35004': { 'subtract': 7483.43, 'rate': 0.35 },
                    '35142': { 'subtract': 10696.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 6
                 * */
                {
                    '0': { 'subtract': 2133.00, 'rate': 0.1 },
                    '2877': { 'subtract': 2381.00, 'rate': 0.15 },
                    '5154': { 'subtract': 3490.20, 'rate': 0.25 },
                    '9454': { 'subtract': 4129.18, 'rate': 0.28 },
                    '17404': { 'subtract': 6140.52, 'rate': 0.33 },
                    '35329': { 'subtract': 7808.43, 'rate': 0.35 },
                    '35467': { 'subtract': 11021.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 7
                 * */
                {
                    '0': { 'subtract': 2458.00, 'rate': 0.1 },
                    '3202': { 'subtract': 2706.00, 'rate': 0.15 },
                    '5479': { 'subtract': 3815.20, 'rate': 0.25 },
                    '9779': { 'subtract': 4454.18, 'rate': 0.28 },
                    '17729': { 'subtract': 6465.52, 'rate': 0.33 },
                    '35654': { 'subtract': 8133.43, 'rate': 0.35 },
                    '35792': { 'subtract': 11346.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 8
                 * */
                {
                    '0': { 'subtract': 2783.00, 'rate': 0.1 },
                    '3527': { 'subtract': 3031.00, 'rate': 0.15 },
                    '5804': { 'subtract': 4140.20, 'rate': 0.25 },
                    '10104': { 'subtract': 4779.18, 'rate': 0.28 },
                    '18054': { 'subtract': 6790.52, 'rate': 0.33 },
                    '35979': { 'subtract': 8458.43, 'rate': 0.35 },
                    '36117': { 'subtract': 11671.29, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 9
                 * */
                {
                    '0': { 'subtract': 3108.00, 'rate': 0.1 },
                    '3852': { 'subtract': 3356.00, 'rate': 0.15 },
                    '6129': { 'subtract': 4465.20, 'rate': 0.25 },
                    '10429': { 'subtract': 5104.18, 'rate': 0.28 },
                    '18379': { 'subtract': 7115.52, 'rate': 0.33 },
                    '36304': { 'subtract': 8783.43, 'rate': 0.35 },
                    '36442': { 'subtract': 11996.29, 'rate': 0.396 }
                }
            ],
            'Married': [
                /*
                 * When exemptions = 0
                 * */
                {
                    '0': { 'subtract': 692.00, 'rate': 0.1 },
                    '2179': { 'subtract': 1187.67, 'rate': 0.15 },
                    '6733': { 'subtract': 3405.80, 'rate': 0.25 },
                    '12892': { 'subtract': 4422.18, 'rate': 0.28 },
                    '19279': { 'subtract': 6673.21, 'rate': 0.33 },
                    '33888': { 'subtract': 8228.34, 'rate': 0.35 },
                    '38192': { 'subtract': 11708.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 1
                 * */
                {
                    '0': { 'subtract': 1017.00, 'rate': 0.1 },
                    '2504': { 'subtract': 1512.67, 'rate': 0.15 },
                    '7058': { 'subtract': 3730.80, 'rate': 0.25 },
                    '13217': { 'subtract': 4747.18, 'rate': 0.28 },
                    '19604': { 'subtract': 6998.21, 'rate': 0.33 },
                    '34213': { 'subtract': 8553.34, 'rate': 0.35 },
                    '38517': { 'subtract': 12033.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 2
                 * */
                {
                    '0': { 'subtract': 1342.00, 'rate': 0.1 },
                    '2829': { 'subtract': 1837.67, 'rate': 0.15 },
                    '7383': { 'subtract': 4055.80, 'rate': 0.25 },
                    '13542': { 'subtract': 5072.18, 'rate': 0.28 },
                    '19929': { 'subtract': 7323.21, 'rate': 0.33 },
                    '34538': { 'subtract': 8878.34, 'rate': 0.35 },
                    '38842': { 'subtract': 12358.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 3
                 * */
                {
                    '0': { 'subtract': 1667.00, 'rate': 0.1 },
                    '3154': { 'subtract': 2162.67, 'rate': 0.15 },
                    '7708': { 'subtract': 4380.80, 'rate': 0.25 },
                    '13867': { 'subtract': 5397.18, 'rate': 0.28 },
                    '20254': { 'subtract': 7648.21, 'rate': 0.33 },
                    '34863': { 'subtract': 9203.34, 'rate': 0.35 },
                    '39167': { 'subtract': 12683.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 4
                 * */
                {
                    '0': { 'subtract': 1992.00, 'rate': 0.1 },
                    '3479': { 'subtract': 2487.67, 'rate': 0.15 },
                    '8033': { 'subtract': 4705.80, 'rate': 0.25 },
                    '14192': { 'subtract': 5722.18, 'rate': 0.28 },
                    '20579': { 'subtract': 7973.21, 'rate': 0.33 },
                    '35188': { 'subtract': 9528.34, 'rate': 0.35 },
                    '39492': { 'subtract': 13008.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 5
                 * */
                {
                    '0': { 'subtract': 2317.00, 'rate': 0.1 },
                    '3804': { 'subtract': 2812.67, 'rate': 0.15 },
                    '8358': { 'subtract': 5030.80, 'rate': 0.25 },
                    '14517': { 'subtract': 6047.18, 'rate': 0.28 },
                    '20904': { 'subtract': 8298.21, 'rate': 0.33 },
                    '35513': { 'subtract': 9853.34, 'rate': 0.35 },
                    '39817': { 'subtract': 13333.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 6
                 * */
                {
                    '0': { 'subtract': 2642.00, 'rate': 0.1 },
                    '4129': { 'subtract': 3137.67, 'rate': 0.15 },
                    '8683': { 'subtract': 5355.80, 'rate': 0.25 },
                    '14842': { 'subtract': 6372.18, 'rate': 0.28 },
                    '21229': { 'subtract': 8623.21, 'rate': 0.33 },
                    '35838': { 'subtract': 10178.34, 'rate': 0.35 },
                    '40142': { 'subtract': 13658.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 7
                 * */
                {
                    '0': { 'subtract': 2967.00, 'rate': 0.1 },
                    '4454': { 'subtract': 3462.67, 'rate': 0.15 },
                    '9008': { 'subtract': 5680.80, 'rate': 0.25 },
                    '15167': { 'subtract': 6697.18, 'rate': 0.28 },
                    '21554': { 'subtract': 8948.21, 'rate': 0.33 },
                    '36163': { 'subtract': 10503.34, 'rate': 0.35 },
                    '40467': { 'subtract': 13983.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 8
                 * */
                {
                    '0': { 'subtract': 3292.00, 'rate': 0.1 },
                    '4779': { 'subtract': 3787.67, 'rate': 0.15 },
                    '9333': { 'subtract': 6005.80, 'rate': 0.25 },
                    '15492': { 'subtract': 7022.18, 'rate': 0.28 },
                    '21879': { 'subtract': 9273.21, 'rate': 0.33 },
                    '36488': { 'subtract': 10828.34, 'rate': 0.35 },
                    '40792': { 'subtract': 14308.97, 'rate': 0.396 }
                },
                /*
                 * When exemptions = 9
                 * */
                {
                    '0': { 'subtract': 3617.00, 'rate': 0.1 },
                    '5104': { 'subtract': 4112.67, 'rate': 0.15 },
                    '9658': { 'subtract': 6330.80, 'rate': 0.25 },
                    '15817': { 'subtract': 7347.18, 'rate': 0.28 },
                    '22204': { 'subtract': 9598.21, 'rate': 0.33 },
                    '36813': { 'subtract': 11153.34, 'rate': 0.35 },
                    '41117': { 'subtract': 14633.97, 'rate': 0.396 }
                }
            ]
        },
        /*
         * Annually frequency
         * */
        'annually': {}
    };

    this.taxesList.annually = this.taxesList.weekly;

}