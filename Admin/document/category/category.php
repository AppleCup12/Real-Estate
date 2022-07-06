<div class="group">
                <div class="text-user">
                  <h4 id="text-user"><i class="bi bi-blockquote-right"></i> ຂໍ້ມູນປະເພດອະສັງຫາ</h4>
                  <p id="text-about">ເພີມຂໍ້ມູນ ປະເພດອະສັງຫາ ກົດ New</p>
                  <div class="group-cate-btn new_category">
                    <button name="delete_cate" class="btn btn-sm btn-danger"><i class="bi bi-blockquote-right"></i> ລົບ</button>
                    <a href="category/one-category" class="btn btn-sm btn-info"><i class="bi bi-blockquote-right"></i> New</a>
                  </div>
                </div>
                <div class="card">
                  <div class="group-card">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">ຈັດການ</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?PHP 
                          $table_cate = mysqli_query ($conn, "SELECT * FROM `AM-dcm-category` WHERE `dcm_category_uid`=1");
                          foreach($table_cate as $row_cate){
                        ?>
                        <tr>
                          <th scope="row">
                            <input type="checkbox" name="cate_checkbox[]" value="<?PHP echo $row_cate['dcm_category_id'] ?>">
                            <input type="checkbox" name="cate_checkbox[]" value="0" style="display: none;" checked>
                          </th>
                          <td><?PHP echo $row_cate['dcm_category'] ?></td>
                          <td><a href="category/one-category-update?update_cate=<?PHP echo $row_cate['dcm_category_id'] ?>">ແກ້ໄຂ</a></td>
                        </tr>
                        <?PHP } ?>
                        
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>