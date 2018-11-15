
@if(config('env-corner-component.enabled') && in_array(env('APP_ENV'), config('env-corner-component.renderWhen')))

<style>
    #env-corner-component {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 0 200px 200px;
        border-color: transparent transparent #19cf08 transparent;
        position: fixed;
        bottom: 0;
        right: 0;
        z-index: 99998;
    }
    #env-corner-component-p{
        position: fixed;
        bottom: 10px;
        font-weight: bold;
        right: 0;
        width: 100px;
        color: #000;
        z-index: 99999;
    }
</style>
<div id="env-corner-component">
    <p id="env-corner-component-p">Test Environment</p>
</div>

@endif