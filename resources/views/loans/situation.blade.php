<!-- Modal -->
          <div class="modal fade" id="situation-{{ $loan->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Situação</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{route('loans.situation', $loan->id)}}" method="POST">
                  @csrf
                    <label>Alterar a situação</label>
                    <select class="form-select" name="situation">
                        <option value="EMPRESTADO">EMPRESTADO</option> 
                        <option value="DEVOLVIDO">DEVOLVIDO</option> 
                        <option value="ATRASADO">ATRASADO</option> 
                    </select>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
                </form>
              </div>
            </div>
          </div>