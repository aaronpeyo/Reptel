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
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
            {
                id: 'logo',
                type: 'image',
                rect: ['25px', '-55px','500px','500px','auto', 'auto'],
                opacity: 1,
                fill: ["rgba(0,0,0,0)",im+"logo.png",'0px','0px'],
                transform: [[],[],[],['0.72996','0.73']]
            },
            {
                id: 'Rectangle5',
                type: 'rect',
                rect: ['0px', '233px','550px','167px','auto', 'auto'],
                fill: ["rgba(255,255,255,1)"],
                stroke: [0,"rgb(0, 0, 0)","none"]
            }],
            symbolInstances: [

            ]
        },
    states: {
        "Base State": {
            "${_Stage}": [
                ["color", "background-color", 'rgba(255,255,255,1)'],
                ["style", "width", '550px'],
                ["style", "height", '400px'],
                ["style", "overflow", 'hidden']
            ],
            "${_logo}": [
                ["style", "top", '-55px'],
                ["transform", "scaleY", '0.73'],
                ["transform", "scaleX", '0.72996'],
                ["style", "opacity", '1'],
                ["style", "left", '25px']
            ],
            "${_Rectangle5}": [
                ["style", "top", '233px']
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 4000,
            autoPlay: true,
            timeline: [
                { id: "eid14", tween: [ "style", "${_Rectangle5}", "top", '409px', { fromValue: '233px'}], position: 3000, duration: 1000 },
                { id: "eid1", tween: [ "style", "${_logo}", "left", '-210px', { fromValue: '25px'}], position: 0, duration: 1000 },
                { id: "eid3", tween: [ "style", "${_logo}", "left", '25px', { fromValue: '-210px'}], position: 1000, duration: 1000 },
                { id: "eid4", tween: [ "style", "${_logo}", "left", '300px', { fromValue: '25px'}], position: 2000, duration: 1000 },
                { id: "eid5", tween: [ "style", "${_logo}", "left", '25px', { fromValue: '300px'}], position: 3000, duration: 1000 },
                { id: "eid2", tween: [ "style", "${_logo}", "top", '-50px', { fromValue: '-55px'}], position: 0, duration: 1000 },
                { id: "eid6", tween: [ "style", "${_logo}", "top", '-51px', { fromValue: '-50px'}], position: 1000, duration: 3000 }            ]
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
})(jQuery, AdobeEdge, "EDGE-340925");
