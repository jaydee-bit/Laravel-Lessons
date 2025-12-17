@props(['highlight' => false]) <!--defining a prop 'highlight' with default value false-->

<div @class(['highlight' => $highlight, 'card'])> <!--conditional class binding based on highlight prop-->
    {{ $slot }} <!--slot for content passed into the component-->
    <a {{$attributes}} class="btn">View Details</a> <!--attributes are passed to the component and rendered here-->
    
</div>