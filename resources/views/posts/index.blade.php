 <x-app-layout>
      <div class="bg-white">
        <form method="GET" action="{{ route('posts.index') }}" class="text-center">
            <div class="col-md-4 mb-3 m-3.5 justify-center">
              <label class="mr-sm-2 sr-only" for="a">学部検索</label>
              <select class="custom-select mr-sm-2" id="a" name="a">
                <option value="">学部検索</option>
                @foreach($faculties as $faculty)
                  <option value="{{ $faculty->id }}" @if($a == $faculty->id) selected @endif>{{ $faculty->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4 mb-3 justify-center">
              <label class="mr-sm-2 sr-only" for="s">学科検索</label>
              <select class="custom-select mr-sm-2" id="s" name="s">
                <option value="">学科検索</option>
                  @foreach($majors as $major)
                  <option value="{{ $major->id }}" @if($s == $major->id) selected @endif>{{ $major->name }}</option>
                @endforeach
              </select>
            </div>
          <div class="form-row justify-content-center">
            <div class="col-md-8 mb-3">
              <label class="mr-sm-2 sr-only" for="g">ゼミ名検索</label>
              <input name="g" class="form-control mr-sm-2" id="g" type="search" placeholder="ゼミ名検索" aria-label="Search" value="{{ $g }}">
            </div>
            <div class="col-md-8 mb-3">
              <label class="mr-sm-2 sr-only" for="search">検索</label>
              <button class="btn btn-info btn-block mr-sm-2 bg-blue-500 hover:bg-blue-400 text-white rounded px-4 py-2" id="search" type="submit">検索</button>
            </div>
          </div>
        </form>
        <div class="border-b-2"></div>
        <div class="px-80 text-2xl m-5">
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <h2 class='seminar'>
                    <a href="/posts/{{ $post->id }}">◦{{ $post->title }}</a>
                </h2>
            </div>
            @endforeach
        </div>
        <div class='paginate'></div>
        
        </div>
        <div class="text-right">
        <a href='/posts/create' class="bg-green-400 hover:bg-green-300 text-white rounded px-4 py-2 m-5">create</a>
        </div>
        <div class="text-right mr-5">{{ Auth::user()->name }}</div>
      </div>
    </x-app-layout>
