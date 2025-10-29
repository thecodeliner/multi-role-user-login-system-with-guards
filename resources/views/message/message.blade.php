<!-- error -->
            <div class="error">
                    @if($errors->any)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="bg-red-400 rounded text-yellow-100 py-2 px-2 mb-1">&#10008; {{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                
                
                 @if (session('error'))
                    <div class="bg-red-400 rounded text-yellow-100 py-2 px-2">
                      &#10008; {{ session('error') }}
                    </div>
                @endif
                <!-- error -->
                <div class="success">
                    @if(@session('success'))
                    
                    <p class="bg-green-400 rounded text-green-500 py-2 px-2">&#10004; {{ session('success') }}</p>
                    
                    @endif
                    
                   
                </div>
