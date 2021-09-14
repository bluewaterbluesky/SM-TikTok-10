        <div class="col d-flex justify-content-center mt-5 mb-5">
           <div class="row" style="width: 100%">
               <div class="col-sm-12 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-radius-20">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <a href="<?= base_url() ?>">
                                    <img src="<?= base_url('images/v2/Logo.png') ?>" width="170px">
                                </a>
                                <h5 class="text-blue mt-3 mb-3"><strong>Sign Up</strong></h5>
                            </div>
                            <form id="signup-form">
                                <div class="form-group mt-5">
                                    <div class="row">
                                        <div class="col-2 sm-margin-right-20">
                                            <div class="sm-avatar text-end">
                                                <img src="<?= base_url('images/no-avatar.png') ?>" style="margin-top: -5px !important">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-sm-primary"><i class="fa fa-image"></i> Upload a Photo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Full Name</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="First Name and Last Name">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Birthday</label>
                                    <input type="date" name="birthday" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Full Address</label>
                                    <textarea name="address" class="form-control" placeholder="Barangay, Municipality/City, Province"></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Short Description</label>
                                    <textarea name="description" class="form-control" placeholder="Share a short description about you!"></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <label>Contact Number</label>
                                    <input type="contact" name="email" class="form-control" placeholder="09XXXXXXXXX">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Enter a username">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter a password">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Select your preferred mall to represent</label>
                                    <select name="mall" class="form-control">
                                        <option value="">Select a mall you prefer</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <p>For verification, we need your valid with date of birth</p>
                                    <p class="text-muted">Upload a scanned or photo of valid ID</p>
                                    <p>File must be at least 2mb and file format must be in jpg, png, or pdf</p>
                                    <button type="button" class="btn btn-sm-outline-primary mt-3 mb-3"><i class="fa fa-upload"></i> Upload file</button>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="agreement_1" name="agreement_1" id="agreement-1">
                                        <label class="form-check-label text-justify" for="agreement-1">
                                            I read and accept <a href="#">privacy policy</a> of SM Supermalls.
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="agreement_2" name="agreement_2" id="agreement-2">
                                        <label class="form-check-label text-justify" for="agreement-2">
                                            I agree and consent to the Privacy Policy of SM Supermalls in my child's behalf.
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="agreement_3" name="agreement_3" id="agreement-3">
                                        <label class="form-check-label text-justify" for="agreement-3">
                                            I agree that I am responsible for my own production expenses and logistics arrangements. 
                                            Neither SM Supermalls nor any of those involved in any capacity in organizing, executing, 
                                            judging or supplying prizes for SM Super TikTok Challenge is responsible for covering or reimbursing 
                                            any expense that maybe incurred by the contestants.
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="agreement_4" name="agreement_4" id="agreement-4">
                                        <label class="form-check-label text-justify" for="agreement-4">
                                            I agree to the use of my photograph/s, name, personal biography, submitted video and audio material/s 
                                            within the current calendar year and in the succeeding two(2) years, and the use of that information 
                                            in all forms of media and communication related to SM Supermalls and SM Super TikTok Challenge without 
                                            compensations, consideration or notification and hereby releases SM Supermalls, its employees, representatives 
                                            and organizers from any claims or liability arising out of or with respect to such use and, in particular, 
                                            irrevocably assign any and all copyright to SM Supermalls regarding my submitted entry/material in SM Super TikTok 
                                            Challenge and that my parents or guardians waive any and all moral rights relating to same.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-sm-primary shadow">
                                            <strong>Sign Up</strong>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
           </div>
        </div>