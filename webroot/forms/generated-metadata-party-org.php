
<?php
/*
GENERATED 2019-09-05 -- 19-16-15
*/

function metadata_party_org_form($oscal, $project_id, $form_only=false) {
	global $logging;
	$html = '';
	$metadata = QueryList($oscal, OSCAL_METADATA);
	$project_file = GetProjectDetail($project_id, 'file-with-path');
	
// === XPATH QUERIES ===
	$oscal_party_flags = array('id', 'role-id');  // All possible attributes this element might have set.
	$oscal_party = QueryListArray($oscal, '//party', $oscal_party_flags);

		$oscal_party_org_flags = array();  // No attributes for this element.
		$oscal_party_org = QueryListArray($oscal, '//party/org', $oscal_party_org_flags);

			$oscal_party_org_org_name_flags = array();  // No attributes for this element.
			$oscal_party_org_org_name = QueryListArray($oscal, '//party/org/org-name', $oscal_party_org_org_name_flags);

			$oscal_party_org_short_name_flags = array();  // No attributes for this element.
			$oscal_party_org_short_name = QueryListArray($oscal, '//party/org/short-name', $oscal_party_org_short_name_flags);

			$oscal_party_org_org_id_flags = array('type');  // All possible attributes this element might have set.
			$oscal_party_org_org_id = QueryListArray($oscal, '//party/org/org-id', $oscal_party_org_org_id_flags);

			$oscal_party_org_address_flags = array('type');  // All possible attributes this element might have set.
			$oscal_party_org_address = QueryListArray($oscal, '//party/org/address', $oscal_party_org_address_flags);

				$oscal_party_org_address_addr_line_flags = array();  // No attributes for this element.
				$oscal_party_org_address_addr_line = QueryListArray($oscal, '//party/org/address/addr-line', $oscal_party_org_address_addr_line_flags);

				$oscal_party_org_address_city_flags = array();  // No attributes for this element.
				$oscal_party_org_address_city = QueryListArray($oscal, '//party/org/address/city', $oscal_party_org_address_city_flags);

				$oscal_party_org_address_state_flags = array();  // No attributes for this element.
				$oscal_party_org_address_state = QueryListArray($oscal, '//party/org/address/state', $oscal_party_org_address_state_flags);

				$oscal_party_org_address_postal_code_flags = array();  // No attributes for this element.
				$oscal_party_org_address_postal_code = QueryListArray($oscal, '//party/org/address/postal-code', $oscal_party_org_address_postal_code_flags);

				$oscal_party_org_address_country_flags = array();  // No attributes for this element.
				$oscal_party_org_address_country = QueryListArray($oscal, '//party/org/address/country', $oscal_party_org_address_country_flags);

			$oscal_party_org_email_flags = array();  // No attributes for this element.
			$oscal_party_org_email = QueryListArray($oscal, '//party/org/email', $oscal_party_org_email_flags);

			$oscal_party_org_phone_flags = array('type');  // All possible attributes this element might have set.
			$oscal_party_org_phone = QueryListArray($oscal, '//party/org/phone', $oscal_party_org_phone_flags);

			$oscal_party_org_url_flags = array();  // No attributes for this element.
			$oscal_party_org_url = QueryListArray($oscal, '//party/org/url', $oscal_party_org_url_flags);

			$oscal_party_org_notes_flags = array('type');  // All possible attributes this element might have set.
			$oscal_party_org_notes = QueryListArray($oscal, '//party/org/notes', $oscal_party_org_notes_flags);

		$oscal_party_notes_flags = array('type');  // All possible attributes this element might have set.
		$oscal_party_notes = QueryListArray($oscal, '//party/notes', $oscal_party_notes_flags);

	$html .= "<form id='form-metadata-party-org' method='post' action='./oscal-forms.php?mode=save&form=metadata-party-org&project={$project_id}'>";
		// MetaMap2Form Generated Content - START (//party)
		$oscal_party__cntr = 0;
		$oscal_party__cntr_max = count($oscal_party);
		foreach ($oscal_party as $oscal_party_item)  { 
			$oscal_party__cntr += 1;
			$html .= "<table class='form' style='width=100%;'>";
				$html .= <<<HTML

				<!-- Form Row - START (party) -->
				<tr>
					<td colspan='2' style='width: auto; text-align: left; vertical-align: top;'>
						<span title='FIELD: party -- DATATYPE: none' style='font-weight: bold;'>Party (organization Or Person)</span>
HTML;

					$html .= "<br /><span title='FLAG: id -- TYPE: ID'>Party (organization Or Person): Identifier</span>&nbsp;";
						$html .= "
							<input  id='oscal_party_item__" . $oscal_party__cntr . "__id' name='party[$oscal_party__cntr][\"id\"]' type='text' style='width: 300px;' class='attribute' value='{$oscal_party_item['flags']['id']}' placeholder='** EMPTY **' title='Unique identifier of the containing object' />";

					$html .= "<br /><span title='FLAG: role-id -- TYPE: string'>Party (organization Or Person): Role Identifier</span>&nbsp;";
						$html .= "
							<input  id='oscal_party_item__" . $oscal_party__cntr . "__id__role-id' name='party[$oscal_party__cntr][\"role-id\"]' type='text' style='width: 300px;' class='attribute' value='{$oscal_party_item['flags']['role-id']}' placeholder='** EMPTY **' title='References a role element defined in metadata.' />";

					$html .= "<table class='form' style='width=100%;'>";
					
							// MetaMap2Form Generated Content - START (//party/org)
							$oscal_party_org__cntr = 0;
							$oscal_party_org__cntr_max = count($oscal_party_org);
							foreach ($oscal_party_org as $oscal_party_org_item)  { 
								$oscal_party_org__cntr += 1;
									$html .= <<<HTML

									<!-- Form Row - START (org) -->
									<tr>
										<td colspan='2' style='width: auto; text-align: left; vertical-align: top;'>
											<span title='FIELD: org -- DATATYPE: none' style='font-weight: bold;'>Organization</span>
HTML;

										$html .= "<table class='form' style='width=100%;'>";
										
												// MetaMap2Form Generated Content - START (//party/org/org-name)
												$oscal_party_org_org_name__cntr = 0;
												$oscal_party_org_org_name__cntr_max = count($oscal_party_org_org_name);
												foreach ($oscal_party_org_org_name as $oscal_party_org_org_name_item)  { 
													$oscal_party_org_org_name__cntr += 1;
														$html .= <<<HTML

														<!-- Form Row - START (org-name) -->
														<tr>
															<td style='width: auto; text-align: right; vertical-align: top;'>
																<span title='FIELD: org-name -- DATATYPE: string' style=''>Organization Name</span><span style='color:red;'>*</span>

															</td>
HTML;

															$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																$html .= "
																	<input  id='oscal_party_org_org_name_item__" . $oscal_party_org_org_name__cntr . "' name='party/org/org-name[$oscal_party_org_org_name__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_org_name_item["value"]}' placeholder='** EMPTY **' title='Full (legal) name of an organization' />";

															$html .= GenerateToolsMenu(false, $oscal_party_org_org_name__cntr, $oscal_party_org_org_name__cntr_max, ($oscal_party_org_org_name_item['value'] === null )) ;
															$html .= "</td>";
															$html .= <<<HTML
														</tr>
														<!-- Form Row - END (org-name) -->
HTML;

												} 
												// MetaMap2Form Generated Content - END
												// MetaMap2Form Generated Content - START (//party/org/short-name)
												$oscal_party_org_short_name__cntr = 0;
												$oscal_party_org_short_name__cntr_max = count($oscal_party_org_short_name);
												foreach ($oscal_party_org_short_name as $oscal_party_org_short_name_item)  { 
													$oscal_party_org_short_name__cntr += 1;
														$html .= <<<HTML

														<!-- Form Row - START (short-name) -->
														<tr>
															<td style='width: auto; text-align: right; vertical-align: top;'>
																<span title='FIELD: short-name -- DATATYPE: string' style=''>Short-name</span>
															</td>
HTML;

															$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																$html .= "
																	<input  id='oscal_party_org_short_name_item__" . $oscal_party_org_short_name__cntr . "' name='party/org/short-name[$oscal_party_org_short_name__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_short_name_item["value"]}' placeholder='** EMPTY **' title='A common name, short name or acronym' />";

															$html .= GenerateToolsMenu(false, $oscal_party_org_short_name__cntr, $oscal_party_org_short_name__cntr_max, ($oscal_party_org_short_name_item['value'] === null )) ;
															$html .= "</td>";
															$html .= <<<HTML
														</tr>
														<!-- Form Row - END (short-name) -->
HTML;

												} 
												// MetaMap2Form Generated Content - END
												// MetaMap2Form Generated Content - START (//party/org/org-id)
												$oscal_party_org_org_id__cntr = 0;
												$oscal_party_org_org_id__cntr_max = count($oscal_party_org_org_id);
												foreach ($oscal_party_org_org_id as $oscal_party_org_org_id_item)  { 
													$oscal_party_org_org_id__cntr += 1;
														$html .= <<<HTML

														<!-- Form Row - START (org-id) -->
														<tr>
															<td style='width: auto; text-align: right; vertical-align: top;'>
																<span title='FIELD: org-id -- DATATYPE: string' style=''>Organization Identifier</span>
															</td>
HTML;

															$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																$html .= "
																	<input  id='oscal_party_org_org_id_item__" . $oscal_party_org_org_id__cntr . "' name='party/org/org-id[$oscal_party_org_org_id__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_org_id_item["value"]}' placeholder='** EMPTY **' title='An identifier for an organization using a designated scheme.' />";

															$html .= "<br /><span title='FLAG: type -- TYPE: string'>Organization Identifier: Type</span>&nbsp;";
																$html .= "
																	<input  id='oscal_party_org_org_id_item__" . $oscal_party_org_org_id__cntr . "__type' name='party/org/org-id[$oscal_party_org_org_id__cntr][\"type\"]' type='text' style='width: 300px;' class='attribute' value='{$oscal_party_org_org_id_item['flags']['type']}' placeholder='** EMPTY **' title='Indicating the type of identifier, address, email or other data item.' />";

															$html .= GenerateToolsMenu(true, $oscal_party_org_org_id__cntr, $oscal_party_org_org_id__cntr_max, ($oscal_party_org_org_id_item['value'] === null )) ;
															$html .= "</td>";
															$html .= <<<HTML
														</tr>
														<!-- Form Row - END (org-id) -->
HTML;

												} 
												// MetaMap2Form Generated Content - END
												// MetaMap2Form Generated Content - START (//party/org/address)
												$oscal_party_org_address__cntr = 0;
												$oscal_party_org_address__cntr_max = count($oscal_party_org_address);
												foreach ($oscal_party_org_address as $oscal_party_org_address_item)  { 
													$oscal_party_org_address__cntr += 1;
														$html .= <<<HTML

														<!-- Form Row - START (address) -->
														<tr>
															<td colspan='2' style='width: auto; text-align: left; vertical-align: top;'>
																<span title='FIELD: address -- DATATYPE: none' style='font-weight: bold;'>Address</span>
HTML;

															$html .= "<br /><span title='FLAG: type -- TYPE: string'>Address: Type</span>&nbsp;";
																$html .= "
																	<input  id='oscal_party_org_address_item__" . $oscal_party_org_address__cntr . "__type' name='party/org/address[$oscal_party_org_address__cntr][\"type\"]' type='text' style='width: 300px;' class='attribute' value='{$oscal_party_org_address_item['flags']['type']}' placeholder='** EMPTY **' title='Indicating the type of identifier, address, email or other data item.' />";

															$html .= "<table class='form' style='width=100%;'>";
															
																	// MetaMap2Form Generated Content - START (//party/org/address/addr-line)
																	$oscal_party_org_address_addr_line__cntr = 0;
																	$oscal_party_org_address_addr_line__cntr_max = count($oscal_party_org_address_addr_line);
																	foreach ($oscal_party_org_address_addr_line as $oscal_party_org_address_addr_line_item)  { 
																		$oscal_party_org_address_addr_line__cntr += 1;
																			$html .= <<<HTML

																			<!-- Form Row - START (addr-line) -->
																			<tr>
																				<td style='width: auto; text-align: right; vertical-align: top;'>
																					<span title='FIELD: addr-line -- DATATYPE: string' style=''>Address Line</span>
																				</td>
HTML;

																				$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																					$html .= "
																						<input  id='oscal_party_org_address_addr_line_item__" . $oscal_party_org_address_addr_line__cntr . "' name='party/org/address/addr-line[$oscal_party_org_address_addr_line__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_address_addr_line_item["value"]}' placeholder='** EMPTY **' title='A single line of an address.' />";

																				$html .= GenerateToolsMenu(true, $oscal_party_org_address_addr_line__cntr, $oscal_party_org_address_addr_line__cntr_max, ($oscal_party_org_address_addr_line_item['value'] === null )) ;
																				$html .= "</td>";
																				$html .= <<<HTML
																			</tr>
																			<!-- Form Row - END (addr-line) -->
HTML;

																	} 
																	// MetaMap2Form Generated Content - END
																	// MetaMap2Form Generated Content - START (//party/org/address/city)
																	$oscal_party_org_address_city__cntr = 0;
																	$oscal_party_org_address_city__cntr_max = count($oscal_party_org_address_city);
																	foreach ($oscal_party_org_address_city as $oscal_party_org_address_city_item)  { 
																		$oscal_party_org_address_city__cntr += 1;
																			$html .= <<<HTML

																			<!-- Form Row - START (city) -->
																			<tr>
																				<td style='width: auto; text-align: right; vertical-align: top;'>
																					<span title='FIELD: city -- DATATYPE: string' style=''>City</span>
																				</td>
HTML;

																				$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																					$html .= "
																						<input  id='oscal_party_org_address_city_item__" . $oscal_party_org_address_city__cntr . "' name='party/org/address/city[$oscal_party_org_address_city__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_address_city_item["value"]}' placeholder='** EMPTY **' title='City, town or geographical region for mailing address' />";

																				$html .= GenerateToolsMenu(false, $oscal_party_org_address_city__cntr, $oscal_party_org_address_city__cntr_max, ($oscal_party_org_address_city_item['value'] === null )) ;
																				$html .= "</td>";
																				$html .= <<<HTML
																			</tr>
																			<!-- Form Row - END (city) -->
HTML;

																	} 
																	// MetaMap2Form Generated Content - END
																	// MetaMap2Form Generated Content - START (//party/org/address/state)
																	$oscal_party_org_address_state__cntr = 0;
																	$oscal_party_org_address_state__cntr_max = count($oscal_party_org_address_state);
																	foreach ($oscal_party_org_address_state as $oscal_party_org_address_state_item)  { 
																		$oscal_party_org_address_state__cntr += 1;
																			$html .= <<<HTML

																			<!-- Form Row - START (state) -->
																			<tr>
																				<td style='width: auto; text-align: right; vertical-align: top;'>
																					<span title='FIELD: state -- DATATYPE: string' style=''>State</span>
																				</td>
HTML;

																				$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																					$html .= "
																						<input  id='oscal_party_org_address_state_item__" . $oscal_party_org_address_state__cntr . "' name='party/org/address/state[$oscal_party_org_address_state__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_address_state_item["value"]}' placeholder='** EMPTY **' title='State, province or analogous geographical region for mailing address' />";

																				$html .= GenerateToolsMenu(false, $oscal_party_org_address_state__cntr, $oscal_party_org_address_state__cntr_max, ($oscal_party_org_address_state_item['value'] === null )) ;
																				$html .= "</td>";
																				$html .= <<<HTML
																			</tr>
																			<!-- Form Row - END (state) -->
HTML;

																	} 
																	// MetaMap2Form Generated Content - END
																	// MetaMap2Form Generated Content - START (//party/org/address/postal-code)
																	$oscal_party_org_address_postal_code__cntr = 0;
																	$oscal_party_org_address_postal_code__cntr_max = count($oscal_party_org_address_postal_code);
																	foreach ($oscal_party_org_address_postal_code as $oscal_party_org_address_postal_code_item)  { 
																		$oscal_party_org_address_postal_code__cntr += 1;
																			$html .= <<<HTML

																			<!-- Form Row - START (postal-code) -->
																			<tr>
																				<td style='width: auto; text-align: right; vertical-align: top;'>
																					<span title='FIELD: postal-code -- DATATYPE: string' style=''>Postal Code</span>
																				</td>
HTML;

																				$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																					$html .= "
																						<input  id='oscal_party_org_address_postal_code_item__" . $oscal_party_org_address_postal_code__cntr . "' name='party/org/address/postal-code[$oscal_party_org_address_postal_code__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_address_postal_code_item["value"]}' placeholder='** EMPTY **' title='Postal or ZIP code for mailing address' />";

																				$html .= GenerateToolsMenu(false, $oscal_party_org_address_postal_code__cntr, $oscal_party_org_address_postal_code__cntr_max, ($oscal_party_org_address_postal_code_item['value'] === null )) ;
																				$html .= "</td>";
																				$html .= <<<HTML
																			</tr>
																			<!-- Form Row - END (postal-code) -->
HTML;

																	} 
																	// MetaMap2Form Generated Content - END
																	// MetaMap2Form Generated Content - START (//party/org/address/country)
																	$oscal_party_org_address_country__cntr = 0;
																	$oscal_party_org_address_country__cntr_max = count($oscal_party_org_address_country);
																	foreach ($oscal_party_org_address_country as $oscal_party_org_address_country_item)  { 
																		$oscal_party_org_address_country__cntr += 1;
																			$html .= <<<HTML

																			<!-- Form Row - START (country) -->
																			<tr>
																				<td style='width: auto; text-align: right; vertical-align: top;'>
																					<span title='FIELD: country -- DATATYPE: string' style=''>Country</span>
																				</td>
HTML;

																				$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																					$html .= "
																						<input  id='oscal_party_org_address_country_item__" . $oscal_party_org_address_country__cntr . "' name='party/org/address/country[$oscal_party_org_address_country__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_address_country_item["value"]}' placeholder='** EMPTY **' title='Country for mailing address' />";

																				$html .= GenerateToolsMenu(false, $oscal_party_org_address_country__cntr, $oscal_party_org_address_country__cntr_max, ($oscal_party_org_address_country_item['value'] === null )) ;
																				$html .= "</td>";
																				$html .= <<<HTML
																			</tr>
																			<!-- Form Row - END (country) -->
HTML;

																	} 
																	// MetaMap2Form Generated Content - END
															$html .= "</table>";
															$html .= "<br />";
															$html .= GenerateToolsMenu(true, $oscal_party_org_address__cntr, $oscal_party_org_address__cntr_max, ($oscal_party_org_address_item['value'] === null )) ;
															$html .= "</td>";
															$html .= <<<HTML
														</tr>
														<!-- Form Row - END (address) -->
HTML;

												} 
												// MetaMap2Form Generated Content - END
												// MetaMap2Form Generated Content - START (//party/org/email)
												$oscal_party_org_email__cntr = 0;
												$oscal_party_org_email__cntr_max = count($oscal_party_org_email);
												foreach ($oscal_party_org_email as $oscal_party_org_email_item)  { 
													$oscal_party_org_email__cntr += 1;
														$html .= <<<HTML

														<!-- Form Row - START (email) -->
														<tr>
															<td style='width: auto; text-align: right; vertical-align: top;'>
																<span title='FIELD: email -- DATATYPE: email' style=''>Email</span>
															</td>
HTML;

															$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																$html .= "
																	<input  id='oscal_party_org_email_item__" . $oscal_party_org_email__cntr . "' name='party/org/email[$oscal_party_org_email__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_email_item["value"]}' placeholder='** EMPTY **' title='Email address' />";

															$html .= GenerateToolsMenu(true, $oscal_party_org_email__cntr, $oscal_party_org_email__cntr_max, ($oscal_party_org_email_item['value'] === null )) ;
															$html .= "</td>";
															$html .= <<<HTML
														</tr>
														<!-- Form Row - END (email) -->
HTML;

												} 
												// MetaMap2Form Generated Content - END
												// MetaMap2Form Generated Content - START (//party/org/phone)
												$oscal_party_org_phone__cntr = 0;
												$oscal_party_org_phone__cntr_max = count($oscal_party_org_phone);
												foreach ($oscal_party_org_phone as $oscal_party_org_phone_item)  { 
													$oscal_party_org_phone__cntr += 1;
														$html .= <<<HTML

														<!-- Form Row - START (phone) -->
														<tr>
															<td style='width: auto; text-align: right; vertical-align: top;'>
																<span title='FIELD: phone -- DATATYPE: string' style=''>Telephone</span>
															</td>
HTML;

															$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																$html .= "
																	<input  id='oscal_party_org_phone_item__" . $oscal_party_org_phone__cntr . "' name='party/org/phone[$oscal_party_org_phone__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_phone_item["value"]}' placeholder='** EMPTY **' title='Contact number by telephone' />";

															$html .= "<br /><span title='FLAG: type -- TYPE: string'>Telephone: Type</span>&nbsp;";
																$html .= "
																	<input  id='oscal_party_org_phone_item__" . $oscal_party_org_phone__cntr . "__type' name='party/org/phone[$oscal_party_org_phone__cntr][\"type\"]' type='text' style='width: 300px;' class='attribute' value='{$oscal_party_org_phone_item['flags']['type']}' placeholder='** EMPTY **' title='Indicating the type of identifier, address, email or other data item.' />";

															$html .= GenerateToolsMenu(true, $oscal_party_org_phone__cntr, $oscal_party_org_phone__cntr_max, ($oscal_party_org_phone_item['value'] === null )) ;
															$html .= "</td>";
															$html .= <<<HTML
														</tr>
														<!-- Form Row - END (phone) -->
HTML;

												} 
												// MetaMap2Form Generated Content - END
												// MetaMap2Form Generated Content - START (//party/org/url)
												$oscal_party_org_url__cntr = 0;
												$oscal_party_org_url__cntr_max = count($oscal_party_org_url);
												foreach ($oscal_party_org_url as $oscal_party_org_url_item)  { 
													$oscal_party_org_url__cntr += 1;
														$html .= <<<HTML

														<!-- Form Row - START (url) -->
														<tr>
															<td style='width: auto; text-align: right; vertical-align: top;'>
																<span title='FIELD: url -- DATATYPE: uri' style=''>URL</span>
															</td>
HTML;

															$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																$html .= "
																	<input  id='oscal_party_org_url_item__" . $oscal_party_org_url__cntr . "' name='party/org/url[$oscal_party_org_url__cntr][0]' type='text' style='width: 500px;' value='{$oscal_party_org_url_item["value"]}' placeholder='** EMPTY **' title='URL for web site or Internet presence' />";

															$html .= GenerateToolsMenu(true, $oscal_party_org_url__cntr, $oscal_party_org_url__cntr_max, ($oscal_party_org_url_item['value'] === null )) ;
															$html .= "</td>";
															$html .= <<<HTML
														</tr>
														<!-- Form Row - END (url) -->
HTML;

												} 
												// MetaMap2Form Generated Content - END
												// MetaMap2Form Generated Content - START (//party/org/notes)
												$oscal_party_org_notes__cntr = 0;
												$oscal_party_org_notes__cntr_max = count($oscal_party_org_notes);
												foreach ($oscal_party_org_notes as $oscal_party_org_notes_item)  { 
													$oscal_party_org_notes__cntr += 1;
														$html .= <<<HTML

														<!-- Form Row - START (notes) -->
														<tr>
															<td style='width: auto; text-align: right; vertical-align: top;'>
																<span title='FIELD: notes -- DATATYPE: prose' style=''>Notes</span>
															</td>
HTML;

															$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
																$html .= "
																
																	<div  title='Any notes with further information' >
																		<textarea  id='textarea-oscal_party_org_notes_item__" . $oscal_party_org_notes__cntr . "' name='party/org/notes[$oscal_party_org_notes__cntr][0]' class='prose_editing' style='width: 500px; height: 50px;' title='Any notes with further information' placeholder='** EMPTY **'>{$oscal_party_org_notes_item["value"]}</textarea>
																		<script>
																			oscal_oscal_party_org_notes_item__" . $oscal_party_org_notes__cntr . " = RichText('prose', '#textarea-oscal_party_org_notes_item__" . $oscal_party_org_notes__cntr . "');
																		</script>
																	</div>";

															$html .= "<br /><span title='FLAG: type -- TYPE: string'>Notes: Type</span>&nbsp;";
																$html .= "
																	<input  id='oscal_party_org_notes_item__" . $oscal_party_org_notes__cntr . "__type' name='party/org/notes[$oscal_party_org_notes__cntr][\"type\"]' type='text' style='width: 300px;' class='attribute' value='{$oscal_party_org_notes_item['flags']['type']}' placeholder='** EMPTY **' title='Indicating the type of identifier, address, email or other data item.' />";

															$html .= GenerateToolsMenu(false, $oscal_party_org_notes__cntr, $oscal_party_org_notes__cntr_max, ($oscal_party_org_notes_item['value'] === null )) ;
															$html .= "</td>";
															$html .= <<<HTML
														</tr>
														<!-- Form Row - END (notes) -->
HTML;

												} 
												// MetaMap2Form Generated Content - END
										$html .= "</table>";
										$html .= "<br />";
										$html .= GenerateToolsMenu(false, $oscal_party_org__cntr, $oscal_party_org__cntr_max, ($oscal_party_org_item['value'] === null )) ;
										$html .= "</td>";
										$html .= <<<HTML
									</tr>
									<!-- Form Row - END (org) -->
HTML;

							} 
							// MetaMap2Form Generated Content - END
							// MetaMap2Form Generated Content - START (//party/notes)
							$oscal_party_notes__cntr = 0;
							$oscal_party_notes__cntr_max = count($oscal_party_notes);
							foreach ($oscal_party_notes as $oscal_party_notes_item)  { 
								$oscal_party_notes__cntr += 1;
									$html .= <<<HTML

									<!-- Form Row - START (notes) -->
									<tr>
										<td style='width: auto; text-align: right; vertical-align: top;'>
											<span title='FIELD: notes -- DATATYPE: prose' style=''>Notes</span>
										</td>
HTML;

										$html .= "<td style='width: auto; text-align: left; vertical-align: top;'>";
											$html .= "
											
												<div  title='Any notes with further information' >
													<textarea  id='textarea-oscal_party_notes_item__" . $oscal_party_notes__cntr . "' name='party/notes[$oscal_party_notes__cntr][0]' class='prose_editing' style='width: 500px; height: 50px;' title='Any notes with further information' placeholder='** EMPTY **'>{$oscal_party_notes_item["value"]}</textarea>
													<script>
														oscal_oscal_party_notes_item__" . $oscal_party_notes__cntr . " = RichText('prose', '#textarea-oscal_party_notes_item__" . $oscal_party_notes__cntr . "');
													</script>
												</div>";

										$html .= "<br /><span title='FLAG: type -- TYPE: string'>Notes: Type</span>&nbsp;";
											$html .= "
												<input  id='oscal_party_notes_item__" . $oscal_party_notes__cntr . "__type' name='party/notes[$oscal_party_notes__cntr][\"type\"]' type='text' style='width: 300px;' class='attribute' value='{$oscal_party_notes_item['flags']['type']}' placeholder='** EMPTY **' title='Indicating the type of identifier, address, email or other data item.' />";

										$html .= GenerateToolsMenu(false, $oscal_party_notes__cntr, $oscal_party_notes__cntr_max, ($oscal_party_notes_item['value'] === null )) ;
										$html .= "</td>";
										$html .= <<<HTML
									</tr>
									<!-- Form Row - END (notes) -->
HTML;

							} 
							// MetaMap2Form Generated Content - END
					$html .= "</table>";
					$html .= "<br />";
					$html .= GenerateToolsMenu(true, $oscal_party__cntr, $oscal_party__cntr_max, ($oscal_party_item['value'] === null )) ;
					$html .= "</td>";
					$html .= <<<HTML
				</tr>
				<!-- Form Row - END (party) -->
HTML;

			$html .= "</table>";
		} 
		// MetaMap2Form Generated Content - END
	$buttons = array(
		["text" => "Go Back", "img" => "./img/arrow-left.png", "action" => "goBack('./oscal.php?mode=open&project={$project_id}')"],
		["text" => "Commit Changes", "img" => "./img/edit.png", "action" => "submitForm('form-metadata-party-org')"]
	);
$html .= MakeMenu($buttons, false, true);
$html .= "</form>
";
	return $html;
}

/*
BASED ON THE FOLLOWING STRUCTURE:
{
    "name": "party",
    "path": "\/\/catalog\/metadata\/party",
    "position": 8,
    "required": false,
    "multiple": true,
    "holds_data": false,
    "datatype": "none",
    "flags": [
        {
            "name": "id",
            "required": false,
            "datatype": "ID",
            "formal-name": "Identifier",
            "description": "Unique identifier of the containing object"
        },
        {
            "name": "role-id",
            "required": false,
            "datatype": "string",
            "formal-name": "Role identifier",
            "description": "References a role element defined in metadata."
        }
    ],
    "content": null,
    "formal-name": "Party (organization or person)",
    "description": "A responsible entity, either singular (an organization or
person) or collective (multiple persons)",
    "model": {
        "org": {
            "name": "org",
            "path": "\/\/catalog\/metadata\/party\/org",
            "position": 1,
            "required": false,
            "multiple": false,
            "holds_data": false,
            "datatype": "none",
            "flags": [],
            "content": null,
            "formal-name": "Organization",
            "description": "An organization or legal entity (not a person), with
contact information",
            "model": {
                "org-name": {
                    "name": "org-name",
                    "path": "\/\/catalog\/metadata\/party\/org\/org-name",
                    "position": 0,
                    "required": true,
                    "multiple": false,
                    "holds_data": true,
                    "datatype": "string",
                    "flags": [],
                    "content": null,
                    "formal-name": "Organization Name",
                    "description": "Full (legal) name of an organization"
                },
                "short-name": {
                    "name": "short-name",
                    "path": "\/\/catalog\/metadata\/party\/org\/short-name",
                    "position": 1,
                    "required": false,
                    "multiple": false,
                    "holds_data": true,
                    "datatype": "string",
                    "flags": [],
                    "content": null,
                    "formal-name": "short-name",
                    "description": "A common name, short name or acronym"
                },
                "org-id": {
                    "name": "org-id",
                    "path": "\/\/catalog\/metadata\/party\/org\/org-id",
                    "position": 2,
                    "required": false,
                    "multiple": true,
                    "holds_data": true,
                    "datatype": "string",
                    "flags": [
                        {
                            "name": "type",
                            "required": false,
                            "datatype": "string",
                            "formal-name": "Type",
                            "description": "Indicating the type of identifier,
address, email or other data item."
                        }
                    ],
                    "content": null,
                    "formal-name": "Organization Identifier",
                    "description": "An identifier for an organization using a
designated scheme."
                },
                "address": {
                    "name": "address",
                    "path": "\/\/catalog\/metadata\/party\/org\/address",
                    "position": 3,
                    "required": false,
                    "multiple": true,
                    "holds_data": false,
                    "datatype": "none",
                    "flags": [
                        {
                            "name": "type",
                            "required": false,
                            "datatype": "string",
                            "formal-name": "Type",
                            "description": "Indicating the type of identifier,
address, email or other data item."
                        }
                    ],
                    "content": null,
                    "formal-name": "Address",
                    "description": "A postal address.",
                    "model": {
                        "addr-line": {
                            "name": "addr-line",
                            "path":
"\/\/catalog\/metadata\/party\/org\/address\/addr-line",
                            "position": 0,
                            "required": false,
                            "multiple": true,
                            "holds_data": true,
                            "datatype": "string",
                            "flags": [],
                            "content": null,
                            "formal-name": "Address line",
                            "description": "A single line of an address."
                        },
                        "city": {
                            "name": "city",
                            "path":
"\/\/catalog\/metadata\/party\/org\/address\/city",
                            "position": 1,
                            "required": false,
                            "multiple": false,
                            "holds_data": true,
                            "datatype": "string",
                            "flags": [],
                            "content": null,
                            "formal-name": "City",
                            "description": "City, town or geographical region
for mailing address"
                        },
                        "state": {
                            "name": "state",
                            "path":
"\/\/catalog\/metadata\/party\/org\/address\/state",
                            "position": 2,
                            "required": false,
                            "multiple": false,
                            "holds_data": true,
                            "datatype": "string",
                            "flags": [],
                            "content": null,
                            "formal-name": "State",
                            "description": "State, province or analogous
geographical region for mailing address"
                        },
                        "postal-code": {
                            "name": "postal-code",
                            "path":
"\/\/catalog\/metadata\/party\/org\/address\/postal-code",
                            "position": 3,
                            "required": false,
                            "multiple": false,
                            "holds_data": true,
                            "datatype": "string",
                            "flags": [],
                            "content": null,
                            "formal-name": "Postal Code",
                            "description": "Postal or ZIP code for mailing
address"
                        },
                        "country": {
                            "name": "country",
                            "path":
"\/\/catalog\/metadata\/party\/org\/address\/country",
                            "position": 4,
                            "required": false,
                            "multiple": false,
                            "holds_data": true,
                            "datatype": "string",
                            "flags": [],
                            "content": null,
                            "formal-name": "Country",
                            "description": "Country for mailing address"
                        }
                    }
                },
                "email": {
                    "name": "email",
                    "path": "\/\/catalog\/metadata\/party\/org\/email",
                    "position": 4,
                    "required": false,
                    "multiple": true,
                    "holds_data": true,
                    "datatype": "email",
                    "flags": [],
                    "content": null,
                    "formal-name": "Email",
                    "description": "Email address"
                },
                "phone": {
                    "name": "phone",
                    "path": "\/\/catalog\/metadata\/party\/org\/phone",
                    "position": 5,
                    "required": false,
                    "multiple": true,
                    "holds_data": true,
                    "datatype": "string",
                    "flags": [
                        {
                            "name": "type",
                            "required": false,
                            "datatype": "string",
                            "formal-name": "Type",
                            "description": "Indicating the type of identifier,
address, email or other data item."
                        }
                    ],
                    "content": null,
                    "formal-name": "Telephone",
                    "description": "Contact number by telephone"
                },
                "url": {
                    "name": "url",
                    "path": "\/\/catalog\/metadata\/party\/org\/url",
                    "position": 6,
                    "required": false,
                    "multiple": true,
                    "holds_data": true,
                    "datatype": "uri",
                    "flags": [],
                    "content": null,
                    "formal-name": "URL",
                    "description": "URL for web site or Internet presence"
                },
                "notes": {
                    "name": "notes",
                    "path": "\/\/catalog\/metadata\/party\/org\/notes",
                    "position": 7,
                    "required": false,
                    "multiple": false,
                    "holds_data": true,
                    "datatype": "prose",
                    "flags": [
                        {
                            "name": "type",
                            "required": false,
                            "datatype": "string",
                            "formal-name": "Type",
                            "description": "Indicating the type of identifier,
address, email or other data item."
                        }
                    ],
                    "content": null,
                    "formal-name": "Notes",
                    "description": "Any notes with further information"
                }
            }
        },
        "notes": {
            "name": "notes",
            "path": "\/\/catalog\/metadata\/party\/notes",
            "position": 2,
            "required": false,
            "multiple": false,
            "holds_data": true,
            "datatype": "prose",
            "flags": [
                {
                    "name": "type",
                    "required": false,
                    "datatype": "string",
                    "formal-name": "Type",
                    "description": "Indicating the type of identifier, address,
email or other data item."
                }
            ],
            "content": null,
            "formal-name": "Notes",
            "description": "Any notes with further information"
        }
    }
}
*/

?>

