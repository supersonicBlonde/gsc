( function( blocks, element, components, editor ) {

    console.log(components);

    var el = element.createElement,
    registerBlockType = blocks.registerBlockType,
    serverSideRender = components.ServerSideRender;

    /*const TEMPLATE = [
        ['core/columns', {},[
            ['core/column', {},[
                ['core/paragraph', { placeholder: 'Enter short recipe description...' }],
                ]
            ]
        ]
    ]];*/

    registerBlockType( 'mytheme/section', {
        title: 'Section',
        icon: 'universal-access-alt',
        category: 'layout',
        supports: {
            html: false
        },
        edit: function(props) {
            return (
                el(wp.editor.RichText, {
                    block: 'mytheme/section',
                    attributes: props.attributes,
                    className: props.className,
                    value: props.attributes.content,
                    onChange: function(content){
                        props.setAttributes( { content: content } );
                    },
                    placeholder: 'Votre contenu …'
                })
            );
        },
        save: function() {
            return null
        },
    } );
}(
    window.wp.blocks,
    window.wp.element,
    window.wp.components,
    window.wp.editor
) );


/*
( function( blocks, element ) {
    var el = element.createElement;
 
    var blockStyle = {
        backgroundColor: '#900',
        color: '#fff',
        padding: '20px',
    };
 
    blocks.registerBlockType( 'mytheme/section', {
        title: 'Section',
        icon: 'universal-access-alt',
        category: 'layout',
        example: {},
        edit: function() {
            return el(
                'p',
                { style: blockStyle },
                'Hello World, step 1 (from the editor).'
            );
        },
        save: function() {
            return el(
                'p',
                { style: blockStyle },
                'Hello World, step 1 (from the frontend).'
            );
        },
    } );
}(
    window.wp.blocks,
    window.wp.element
) );
*/