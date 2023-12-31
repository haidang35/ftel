<ul class="list-star m-t-4 review-star">
    @for($i = 0; $i < 5; $i++)
        <li class="fpt-review-star">
            <svg width="800px" height="800px" viewBox="0 0 24 24" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/">
                <g transform="translate(0 -1028.4)">
                    <path d="m12 1028.4 4 9 8 1-6 5 2 9-8-5-8 5 2-9-6-5 8-1z" fill="@if($rating <= $i) #f39c12 @else rgb(139, 136, 136)  @endif"/>
                    <path d="m12 1028.4-4 9-6.9688 0.8 4.9688 4.2-0.1875 0.8 0.1875 0.2-1.75 7.8 7.75-4.8 7.75 4.8-1.75-7.8 0.188-0.2-0.188-0.8 4.969-4.2-6.969-0.8-4-9z"
                          fill="@if($rating <= $i) #f1c40f @else rgb(139, 136, 136) @endif"/>
                </g>
            </svg>
        </li>

    @endfor
</ul>
