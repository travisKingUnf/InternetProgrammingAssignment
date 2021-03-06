<?php
/**
 * Created by PhpStorm.
 * User: travi_000
 * Date: 4/5/2016
 * Time: 6:10 PM
 */

include '../../Global/RenderScripts/MasterNavigationBar.php';
?>

<!DOCTYPE HTML>
<html id="section">
<head>
    <link rel="stylesheet" type="text/css" href="../../Global/StyleSheets/style.css">
    <title>Contact Me :)</title>
    <script src="../JavaScripts/contactForm.js"></script>
</head>

<body>

<?php
    MasterNavigationBar(3);
?>

<div id="paragraph">
    <h1> COP 4813: Internet Programming</h1>
    <h2>ePortfolio for COP4813: Internet Programming</h2>
    <h3>Travis Allen King</h3>
    <hr/>
    <h4>Contact Me</h4>
    <hr/>

    <table>
        <tr>
            <td>
                <form id="contactForm">
                    <fieldset>
                        <table>
                            <tr>
                                <td>
                                    <!-- disabled because of the way the email is sent out
    <input class="chkBxResetable" type="checkbox" id="anonymousChkBx" value="anonymousChkBx" visible="false">
                                  <label for="anonymousChkBx" visible="false">Check if you would like to remain anonymous</label>
    -->
                                </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>
                                    <select id="suffixReset" name="cars">
                                        <option id="suffixDefualt" value=""></option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Ms">Ms</option>
                                    </select>
                                </td>
                                <td>
                                    <input id="NameTxtBx" class="textResetable" type="text" placeholder="Name"/>
                                </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td>
                                    <!-- disabled because of the way the email is sent out
    <input id="EmailTxtBx" class="textResetable" type="email" placeholder="Email Address" />
                                  -->
                                </td>
                            </tr>
                        </table>

                        <hr/>

                        <table>
                            <tr>
                                <td>
    Describe Yourself
    <table>
                                        <tr>
                                            <td>
                                                <label for="collegeChkBx">I am a student</label>
                                            </td>
                                            <td>
                                                <input class="chkBxResetable" type="checkbox" id="collegeChkBx"
                                                       value="collegeChkBx">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="EmployerChkBx">I am an employer</label>
                                            </td>
                                            <td>
                                                <input class="chkBxResetable" type="checkbox" id="EmployerChkBx"
                                                       value="EmployerChkBx">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="famChkBx">I am a friend or family member</label>
                                            </td>
                                            <td>
                                                <input class="chkBxResetable" type="checkbox" id="famChkBx"
                                                       value="famChkBx">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="programmerChkBx">I am a fellow programmer</label>
                                            </td>
                                            <td>
                                                <input class="chkBxResetable" type="checkbox" id="programmerChkBx"
                                                       value="programmerChkBx">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="20%"></td>
                                <td>
    How did you find this site?
                                    <table>
                                        <tr>
                                            <td>
    Heard from a friend
    </td>
                                            <td>
                                                <input class="radioBtnResetable" type="radio" id="refRadioBtn"
                                                       name="howcome">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
    Found the link online
    </td>
                                            <td>
                                                <input class="radioBtnResetable" type="radio" id="LinkRadioBtn"
                                                       name="howcome">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
    Travis Told me to click a link
    </td>
                                            <td>
                                                <input class="radioBtnResetable" type="radio" id="begChkBx"
                                                       name="howcome">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <hr/>

                        <table>
                            <tr>
                                <td>
                                    <textarea id="MessageTxtArea" class="textResetable" rows="4" cols="55"
                                              placeholder="Type your message here"></textarea>
                                </td>
                            </tr>
                        </table>

                        <hr/>

                        <table>
                            <tr>
                                <td>
                                    <input style="float:left;" type="button" value="Submit"
                                           onclick="simulateSubmit();"/>
                                </td>
                                <td style="width: 340px;"></td>
                                <td>
                                    <input style="float:right;" type="button" value="Reset" onclick="Reset();"/>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
            <td>
                <img align="right" src="../../Assets/Diagram1Module2IP.png" alt="Flow Chart"/>
            </td>
        </tr>
    </table>
    <div id="footer">
        <p><font color="Green">"I believe that at the end of the century the use of words and general educated opinion
            will have altered so much that one will be able to speak of machines thinking without expecting to be
            contradicted" - Alan Turing</font>
        <p>
    </div>
</div>
</body>

</html>
