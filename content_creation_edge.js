/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};
var opts = {
    'gAudioPreloadPreference': 'auto',

    'gVideoPreloadPreference': 'auto'
};
var resources = [
];
var symbols = {
"stage": {
    version: "4.0.0",
    minimumCompatibleVersion: "4.0.0",
    build: "4.0.0.359",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: true,
    resizeInstances: false,
    content: {
            dom: [
            {
                id: 'logo11',
                type: 'image',
                rect: ['269px', '-203px','163px','196px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"logo1.1.png",'0px','0px']
            },
            {
                id: 'logo12',
                type: 'image',
                rect: ['506px', '211px','290px','41px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"logo1.2.png",'0px','0px']
            },
            {
                id: 'logo13',
                type: 'image',
                rect: ['150px', '369px','324px','26px','auto', 'auto'],
                fill: ["rgba(0,0,0,0)",im+"logo1.3.png",'0px','0px']
            }],
            symbolInstances: [

            ]
        },
    states: {
        "Base State": {
            "${_Stage}": [
                ["style", "height", '350px'],
                ["color", "background-color", 'rgba(255,255,255,1)'],
                ["style", "width", '500px']
            ],
            "${_logo13}": [
                ["style", "left", '150px'],
                ["style", "top", '369px']
            ],
            "${_logo12}": [
                ["style", "left", '506px'],
                ["style", "top", '211px']
            ],
            "${_logo11}": [
                ["style", "left", '269px'],
                ["style", "top", '-203px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 2250,
            autoPlay: true,
            timeline: [
                { id: "eid16", tween: [ "style", "${_logo13}", "left", '159px', { fromValue: '150px'}], position: 0, duration: 870 },
                { id: "eid19", tween: [ "style", "${_logo13}", "left", '176px', { fromValue: '159px'}], position: 870, duration: 1380 },
                { id: "eid17", tween: [ "style", "${_logo13}", "top", '232px', { fromValue: '369px'}], position: 0, duration: 870 },
                { id: "eid18", tween: [ "style", "${_logo13}", "top", '208px', { fromValue: '232px'}], position: 870, duration: 1380 },
                { id: "eid14", tween: [ "style", "${_logo12}", "left", '193px', { fromValue: '506px'}], position: 1245, duration: 1005 },
                { id: "eid15", tween: [ "style", "${_logo12}", "top", '159px', { fromValue: '211px'}], position: 1245, duration: 1005 },
                { id: "eid13", tween: [ "style", "${_logo11}", "top", '82px', { fromValue: '-203px'}], position: 685, duration: 815 },
                { id: "eid12", tween: [ "style", "${_logo11}", "left", '13px', { fromValue: '269px'}], position: 685, duration: 815 }            ]
        }
    }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources, opts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-455333329");
