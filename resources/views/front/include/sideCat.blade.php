<div class="card">
            <div class="card-header">
              <h5>Category</h5>
            </div>
            <div class="card-body">
              <div class="list-group">
                  @foreach($categories as $category)
                    <a href="{{route('homecategory',['id'=>$category->id,'name'=>$category->catName])}}" class="list-group-item list-group-item-action">
                      {{$category->catName}}
                    </a>
                  @endforeach

              </div>
            </div>
          </div>