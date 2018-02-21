
                                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">perm_contact_calendar</i>
                        </span>
                        <div class="form-line">
                            <input id="notice_date" type="date" class="form-control" placeholder="" name="notice_date" required autofocus>
                     
                        </div>
                    </div>             

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                        <input id="headline" type="text" class="form-control" name="headline" placeholder="Notice headline" required autofocus>
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">domain</i>
                        </span>
                         <div class="form-group">
                                <div class="form-line">
                                    <textarea id="notice" name="notice" rows="1" class="form-control no-resize auto-growth" placeholder="Notice.."></textarea>
                                </div>
                            </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" name="submit" type="submit">PUBLISH NOTICE</button>

                    <br><br>
                  <div id="error_message" >
                  <div class="alert alert-danger hidden">
                                <strong>Oh snap!</strong> Failed To Register..Try Again..!!
                            </div>
                  </div>
                  <div id="success_message">
                  <div class="alert alert-success hidden">
                    <strong>Well done!</strong> You Have successfully Registered Your Account..!!
                </div>
                  </div>


                </form>