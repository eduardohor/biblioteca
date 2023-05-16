<!-- Modal -->
          <div class="modal fade" id="delete-{{$book->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Excluir Livro</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{route('books.destroy', $book->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <p>Deseja realmente remover {{$book->name}} ? </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                   <button type="submit" class="btn btn-danger">Remover</button> 
                </div>
                </form>
              </div>
            </div>
          </div>