<div class="accordion-group">
    <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#addNewItemAccordion" href="#newPrompt">
            Create a new prompt.
        </a>
    </div>
    <div id="newPrompt" class="accordion-body collapse">
        <div class="accordion-inner">
            <br>
            <form class="form-horizontal" id="promptForm">
                <div class="control-group">
                    <label class="control-label" for="displayLabel">Display Label <i class="icon-asterisk"></i></label>
                    <div class="controls">
                        <input type="text" name="displayLabel" id="displayLabel" placeholder="Display Label" />
                        <i class="help-icon icon-question-sign" data-original-title="The user-friendly name of this prompt used in visualizations." rel="tooltip" data-placement="right"></i>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="displayType">Display Type <i class="icon-asterisk"></i></label>
                    <div class="controls">
                        <select name="displayType" id="displayType">
                            <option value="">Please choose a display type</option>
                            <option value="Measurement">Measurement</option>
                            <option value="Event">Event</option>
                            <option value="Count">Count</option>
                            <option value="Category">Category</option>
                            <option value="Metadata">Metadata</option>
                        </select>
                        <i class="help-icon icon-question-sign" data-original-title="The type of the data being collected, which must be one of measurement, event, count, category, or metadata." rel="tooltip" data-placement="right"></i>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="promptText">Prompt Text <i class="icon-asterisk"></i></label>
                    <div class="controls">
                        <textarea type="text" name="promptText" id="promptText" placeholder="Prompt Text"></textarea>
                        <i class="help-icon icon-question-sign" data-original-title="The text to display to the user when prompting them to respond." rel="tooltip" data-placement="right"></i>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="abbreviatedText">Abbreviated Text <i class="icon-asterisk"></i></label>
                    <div class="controls">
                        <textarea type="text" name="abbreviatedText" id="abbreviatedText" placeholder="Abbreviated Text"></textarea>
                        <i class="help-icon icon-question-sign" data-original-title="An abbreviated version of the prompt text for use in situations where space is limited or for display purposes." rel="tooltip" data-placement="right"></i>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="promptType">Prompt Type <i class="icon-asterisk"></i></label>
                    <div class="controls">
                        <select name="promptType" id="groupPromptType">
                            <option value="">Please choose a prompt type</option>
                            <option value="multi_choice">Multiple Choice</option>
                            <option value="multi_choice_custom">Multiple Choice Custom</option>
                            <option value="number">Number</option>
                            <option value="photo">Photo</option>
                            <option value="remote_activity">Remote Activity</option>
                            <option value="single_choice">Single Choice</option>
                            <option value="single_choice_custom">Single Choice Custom</option>
                            <option value="text">Text</option>
                            <option value="timestamp">Timestamp</option>
                        </select>
                        <i class="help-icon icon-question-sign" data-original-title="Choose type of your prompt" rel="tooltip" data-placement="right"></i>
                    </div>
                    <div class="controls">  
                        <div>
                            <br>
                            <textarea name="properties" id="addedPrompt" readonly></textarea>
                        </div>
                    </div>
                    <!-- Overlay window section -->
                    
                    <div class="overlay" id="overlay" style="display:none;"></div>

                    <div class="OverlayBox" id="PromptBox">
                        <div class="data" id="data">
                        </div>
                        <div class="control-group">
                            <button type="button" class="btn btn-primary" data-toggle="button" id="PromptBoxOK">OK</button>
                        </div>
                    </div>
                </div>
                
                <div class="accordion" id="OptionalSection">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#OptionalSection" href="#newSection">
                                Optional Properties
                            </a>
                        </div>
                        <div id="newSection" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="control-group">
                                    <label class="control-label" for="default">Default</label>
                                    <div class="controls">
                                        <input type="text" name="default" id="default" placeholder="Default" />
                                        <i class="help-icon icon-question-sign" data-original-title="The default value for this prompt. This is type-dependent." rel="tooltip" data-placement="right"></i>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="condition">Condition</label>
                                    <div class="controls">
                                        <input type="text" name="promptCondition" id="promptCondition" onclick="openConditionBox('condition')" placeholder="Click to edit conditions" />
                                        <i class="help-icon icon-question-sign" data-original-title="The condition which determines if the prompt is displayed or not." rel="tooltip" data-placement="right"></i>
                                    </div>
                                    <div class="overlay" id="overlayCondition" style="display:none;"></div>
                                    <div class="OverlayBox" id="ConditionBox">
                                        <table id="conditionTable">
                                            <tr>
                                                <td><input name="condType" type="radio" style="vertical-align: middle" value="Simple" checked="checked"></td>
                                                <td>Simple</td>
                                                <td><input name="condType" type="radio" style="vertical-align: middle" value="Advance"></td>
                                                <td>Advance</td>
                                            </tr>
                                        </table>
                                        <p> </p>
                                        <div id="condType">
                                            <select id="promptIDList">
                                                <!-- Prompt ID list drop down -->
                                            </select>
                                            <select id="operator" width="70"  style="width: 70px">
                                                <option value="==">&#61;</option>
                                                <option value="!=">&#33;&#61;</option>
                                                <option value="<">&#60;</option>
                                                <option value="<=">&#60;&#61;</option>
                                                <option value=">">&#62;</option>
                                                <option value=">=">&#62;&#61;</option>
                                            </select>
                                            <input type="text" id="conditionValue" placeholder="value"/>
                                        </div>
                                        <p><button type="button" class="btn btn-primary" id="saveCondition" value="condition">Save Condition</button></p>
                                    </div>
                                    <!--<div id="bgPopup"></div>-->
                                    <!--<input type="text" name="Condition" id="Condition" placeholder="Condition" /> -->
                                </div>
                                <div class="control-group">
                                    <div class="controls"> 
                                        <label class="checkbox">
                                            <input type="checkbox" name="skippable" id="skippable">
                                            Can this survey be skippable?
                                        </label>
                                    </div>
                                </div> 
                                
                                <div class="control-group">
                                    <label class="control-label" id="skipLabelLabel">Skip Label</label>
                                    <div class="controls">
                                        <input type="text" name="skipLabel" id="skipLabel" placeholder="Skip Label" disabled="disable"/>
                                    </div>
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary" id="add prompt">Add Prompt</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>