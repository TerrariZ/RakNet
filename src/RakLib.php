<?php

/*
 * This file is part of RakLib.
 * Copyright (C) 2024 TerrariZ Team <https://github.com/TerrariZ/RakNet>
 *
 * RakNet is not affiliated with Jenkins Software LLC nor RakNet.
 *
 * RakNet is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace raknet;

abstract class RakNet{
	/**
	 * Default vanilla RakNet protocol version that this library implements. Things using RakLib can override this
	 * protocol version with something different.
	 */
	public const DEFAULT_PROTOCOL_VERSION = 6;

	/** Regular RakNet uses 10 by default. Configure this value as appropriate. */
	public static int $SYSTEM_ADDRESS_COUNT = 20;
}
